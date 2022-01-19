;(function ($) {

    let options = wcLiquid.options || {},
        currentPage = wcLiquid.paged || 1,
        loaderHtml = '<span class="row-bg-loader"></span>',
        ajaxFilter = options.wcAjaxFilter || 'off',
        ajaxPagination = options.wcAjaxPagination || 'off',
        paginationType = options.wcAjaxPaginationType || 'classic',
        paginationButtonText = options.wcAjaxPaginationButtonText || 'Load more products',
        whatClicked = 'filter', //filter or pagination
        scrollTracking = true;

    $(document).ready(ready);

    function ready() {

        let priceFilterWidget = $('.widget_price_filter'),
            productCategoriesWidget = $('.widget_product_categories'),
            layeredNavWidget = $('.widget_layered_nav').not('[class*=yith-woo-ajax-]'),
            wcNoticesWrapper = $('.woocommerce-notices-wrapper'),
            ldShopTopbar = $('.ld-shop-topbar'),
            ulProducts = $('ul.products'),
            wcPagination = $('.woocommerce-pagination'),
            $wcAjaxBtn = null;

        $('span.count').each(function(){
            $(this).text($(this).text().replace(/[()]/g, ''));
        });

        //Enable AJAX pagination
        if (isOn(ajaxPagination) && ulProducts.length && wcPagination.length) {
            ajaxPaginationInit();
        }

        //Enable AJAX filter
        if (isOn(ajaxFilter) && ulProducts.length) {
            ajaxFilterInit();
        }

        let urlParams = new URLSearchParams(window.location.search);

        if ( urlParams.get('min_price') || urlParams.get('max_price') || ~window.location.search.indexOf('filter_') ) {
            updateProducts();
        }

        //Update all products by filters
        function updateProducts() {

            let filters = {},
                url = new URL(location.href),
                selectOrderBy = $('select.orderby'),
                orderBy = selectOrderBy.val() || 'menu_order',
                chosenFilters = [];

            //if price filter enabled, add price to filter
            if (priceFilterWidget.length) {

                let minPrice = priceFilterWidget.find('#min_price'),
                    maxPrice = priceFilterWidget.find('#max_price');

                if ( parseInt(minPrice.val()) !== parseInt(minPrice.data('min')) ||
                     parseInt(maxPrice.val()) !== parseInt(maxPrice.data('max')) ) {
                    filters['min_price'] = parseInt(minPrice.val());
                    filters['max_price'] = parseInt(maxPrice.val());
                }

            }

            //Add some attributes to filter
            if (layeredNavWidget.length) {
                $.each(layeredNavWidget.find('.chosen .count'), function (key, chosen) {
                    let value = filters[$(chosen).data('filter')] ? filters[$(chosen).data('filter')] + ',' : '';
                    filters[$(chosen).data('filter')] = value + $(chosen).data('slug');
                });
            }

            //Add GET variable to Href
            $.each(filters, function (filterKey, filterValue) {
                url.searchParams.set(filterKey, filterValue);
            });

            url.searchParams.set('orderby', orderBy);

            if (whatClicked === 'filter') {
                url.pathname = url.pathname.replace('page/' + currentPage, '');
                currentPage = 1;
            }

            if (whatClicked === 'pagination') {
                let currentPagination = $('span.page-numbers.current'),
                    oldPage = currentPagination.length ? parseInt(currentPagination.text()) : 1;

                url.pathname = url.pathname.replace('page/' + oldPage, '') + 'page/' + currentPage;
            }


            //Add some categiry to filter
            if (productCategoriesWidget.length && $('.woocommerce .widget_product_categories li.chosen a input').length) {
                let cat = $('.woocommerce .widget_product_categories li.chosen a input');
                filters['term_id'] = cat.data('term-id');
            } else if (wcLiquid.termId) {
                filters['term_id'] = wcLiquid.termId;
            }

            //Ajax request
            $.ajax({
                type: "post",
                url: wcLiquid.ajaxUrl,
                data: {
                    action: "liquid_wc_filter_ajax",
                    filters: filters,
                    page: currentPage,
                    orderby: orderBy,
                },
                beforeSend: function () {
                    if ('classic' === paginationType || whatClicked === 'filter') {
                        ulProducts.addClass('items-loading').append(loaderHtml);
                    }

                    if (whatClicked === 'pagination' && 'scroll' === paginationType) {
                        $wcAjaxBtn.addClass('lqd-ajax-btn-loading');
                    }

                    if (whatClicked === 'pagination' && 'button' === paginationType) {
                        $wcAjaxBtn.addClass('lqd-ajax-btn-loading');
                    }
                },
                success: function (response) {

                    if (response.success === true) {

                        let wcNoticesWrapperHtml = $(response.data.html).find('.woocommerce-notices-wrapper').html() || '',
                            ldShopTopbarHtml = $(response.data.html).find('.ld-shop-topbar').html() || '',
                            ulProductsHtml = $(response.data.html).find('ul.products').html() || '',
                            wcPaginationHtml = $(response.data.html).find('.woocommerce-pagination').html() || '';

                        //Update HTML
                        if ('classic' === paginationType || 'filter' === whatClicked) {

                            wcNoticesWrapper.html(wcNoticesWrapperHtml);
                            // ldShopTopbar.html(ldShopTopbarHtml);

                            ulProducts.removeClass('items-loading').html(ulProductsHtml);
                            wcPagination.html(wcPaginationHtml);

                            //Init for woocommerce ordering select
                            $('.woocommerce-ordering').on('change', 'select.orderby', function () {
                                $(this).closest('form').submit();
                            });

                            $('form').liquidFormInputs();

                        }

                        if ('pagination' === whatClicked && ('button' === paginationType || 'scroll' === paginationType)) {
                            ulProducts.removeClass('items-loading').html(ulProducts.html() + ulProductsHtml);
                            wcPagination.removeClass('lqd-ajax-btn-loading');
                            wcPagination.html(wcPaginationHtml);
                        }

                        //change URL
                        if (history.pushState) {
                            history.pushState({path: url.href}, '', decodeURIComponent(url.href));
                        }

                        updatePaginationLinks();

                        if ('button' === paginationType) {
                            changeClassicPaginationToButton();
                        }

                        if ('scroll' === paginationType) {
                            scrollTracking = true;
                            changeClassicPaginationToScroll();
                        }

                        //Remove loader
                        $('.row-bg-loader').remove();

                    }

                }

            });

        }

        function updatePaginationLinks() {
            $('a.page-numbers').each(function () {
                let pathName = location.pathname.replace('/page/' + currentPage, '') + $(this).attr('href');
                $(this).attr('href', location.origin + pathName + location.search);
            });
        }

        function changeClassicPaginationToButton() {

            $('.next.page-numbers', wcPagination)
                .html(`<span>${paginationButtonText}</span>`)
                .parent().addClass('wc-pagination-button');

            $wcAjaxBtn = $('.wc-pagination-button a', wcPagination);

            wcPagination
                .addClass('wc-pagination-type-button')
                .find('li:not(.wc-pagination-button)').hide();
        }

        function changeClassicPaginationToScroll() {

            wcPagination
                .addClass('wc-pagination-type-scroll')
                .find('li').hide();
        }

        function ajaxPaginationInit() {

            if ('scroll' === paginationType) {

                $(window).on('scroll', function () {
                    let scrollHeight = $(this).scrollTop() + window.innerHeight,
                        ulProductsBottom = ulProducts.offset().top + ulProducts.height();

                    if (scrollTracking && scrollHeight >= ulProductsBottom) {
                        scrollTracking = false;
                        $('.next.page-numbers').trigger('click');
                    }
                });

                changeClassicPaginationToScroll();
            }

            if ('button' === paginationType) {
                changeClassicPaginationToButton();
            }

            $(document).on('click', 'a.page-numbers', function (e) {
                e.preventDefault();

                let currentPagination = $('span.page-numbers.current');

                currentPage = currentPagination.length ? parseInt(currentPagination.text()) : 1

                if ($(this).hasClass('next')) {
                    currentPage++;
                }

                if ($(this).hasClass('prev')) {
                    currentPage--;
                }

                if ($.isNumeric($(this).text())) {
                    currentPage = parseInt($(this).text());
                }

                whatClicked = 'pagination';

                updateProducts();
            });
        }

        function ajaxFilterInit() {
            //Price filter submit
            if (priceFilterWidget.length) {

                priceFilterWidget.find('form').on('submit', function (e) {
                    e.preventDefault();
                    whatClicked = 'filter';
                    updateProducts();
                });

            }

            //Change orderby select
            $(document).on('submit', 'form.woocommerce-ordering', function (e) {
                e.preventDefault();
                whatClicked = 'filter';
                updateProducts();
            });

            //Categories click
            if (productCategoriesWidget.length) {

                productCategoriesWidget.find('a').on('click', function (e) {
                    e.preventDefault();
                    $(this).parent().toggleClass('chosen');
                    whatClicked = 'filter';
                    updateProducts();
                });

            }

            //Attributes filter click
            if (layeredNavWidget.length) {

                layeredNavWidget.find('a').on('click', function (e) {
                    e.preventDefault();
                    $('a[href="' + $(this).attr('href') + '"]').parent().toggleClass('woocommerce-widget-layered-nav-list__item--chosen chosen');
                    whatClicked = 'filter';
                    updateProducts();
                });

            }
        }

    }

    function isOn(option) {
        return option === 'on';
    }

})(jQuery);