(function($) {

	var liquidImporter = function(id, options) {
		var $this = this;

		// Id import
		$this.id = id;
		// list type import
		$this.options = options;


		this.init = function() {

			var self = this,
			message,
			start = $('#lqd-popup'),
			actions = this.options.slice();
			start.hide();
			$('#liquid-import-emoj').hide();

			//start.after(_.template($('#tmpl-demo-import-modules').html())({ modules: this.options }));
			start.hide();

			$(document.body).append(_.template($('#tmpl-demo-import-modules').html())({ modules: this.options }));
			
			//alert( $('.import-id').attr('data-import-id') );
			
			var data = new FormData();

			data.append('action', 'ocdi_import_demo_data');
			//data.append( 'security', boo.ajax_nonce );
			data.append('selected', 2);
			data.append('selections', options);
			runImport($this.options, $this.id);

			//ajaxCall( data );

		};

		this.init();

	};

	function runImport(options, id) {
		var count = 0;
		options[count] && ajaxRun('liquid_' + options[options.length - options.length], options, id, function() {
			count++;
			options[count] && ajaxRun('liquid_' + options[count], options, id, function() {
				count++;
				options[count] && ajaxRun('liquid_' + options[count], options, id, function() {
					count++;
					options[count] && ajaxRun('liquid_' + options[count], options, id, function() {
						count++;
						options[count] && ajaxRun('liquid_' + options[count], options, id, function() {
							count++;
							options[count] && ajaxRun('liquid_' + options[count], options, id);
						});
					});
				});
			})
		});
	}

	function purgeCache() {

		jQuery.post(ajaxurl, {
			action: 'hub_cache_purge'
		}, function (response) {
				console.log(response);
		});

	}

	function getImportedPosts() {
		var total, imported, precent, newtotal, newtotal1;
		$.ajax({
			url: ajaxurl,
			type: 'GET',
			data: {
				action: 'liquid_total_imported',
			},
		}).done(function(resp) {
			total = parseInt(resp.match(/(?:(?!\|).)*/i)[0]);
			if (resp.indexOf('|')) {
				newtotal = resp.substring(0, resp.indexOf('|'));
				newtotal1 = resp.replace(newtotal, '');
			} else {
				newtotal1 = total;
			}
			if (newtotal1.match(/(\d+)(?!.*\d)/i)) {
				imported = parseInt(newtotal1.match(/(\d+)(?!.*\d)/i)[0]);
				precent = parseInt((imported * 100) / total);
			} else {
				precent = parseInt('100');
			}

			$('#lqd-loader').parent().css('width', precent - 1 + '%');
			$('#lqd-loader').text(precent - 1 + '%');
			return false;
		});
		return false;

	}

	function getProgress() {
		$.ajax({
			url: ajaxurl,
			type: 'GET',
			data: {
				action: 'liquid_progress_imported',
			},
		}).done(function(resp) {
			$('#liquid-progress').text(resp);
			return false;
		});
		return false;
	}

	function ajaxRun(action, options, demo, callback) {
		var ajaxupdater, ajaxprogress;
		ajaxupdater = setInterval(getImportedPosts, 5000);

		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: action,
				demo: demo,
				content: ($('#lqd-imp-all').is(':checked') ? 1 : 0),
				media: ($('#lqd-imp-media').is(':checked') ? 1 : 0)
			},
			beforeSend: function(jq) {
				$.ajax({
					url: ajaxurl,
					type: 'POST',
					data: {
						action: 'liquid_reset_logs',
					},
				})
				ajaxprogress = setInterval(getProgress, 5000);
			},
			success: function(d) {

			},
			complete: function() {

				if (typeof callback === 'function' && !action.match('undefined')) {
					callback();
				}
				clearInterval(ajaxupdater);
				clearInterval(ajaxprogress);
			},
		}).done(function() {
			if ('liquid_' + options[options.length - 1] === action) {
				clearInterval(ajaxupdater);
				clearInterval(ajaxprogress);
				
				var popup = $('#liquid-popup');
				$('#lqd-loader').parent().css('min-width', '100%');
				$('#lqd-loader').text("100%");
				setTimeout(function() {
					$('#liquid-import-emoj').show();
					$('#lqd-progress-popup').hide();
					$('#liquid-progress').hide();
					setTimeout(function() { popup.remove(); }, 10000);

				}, 800)

				purgeCache();

				if (typeof merlin_params !== 'undefined') {
					var current_url = window.location.href;
					current_url = current_url.replace("content", "ready");
					window.location.href = current_url;
					localStorage.removeItem("liquid_setup_builder");
				}

				return false;
			}
		});
	}

	function reset_wp(callback) {
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: 'liquid_reset_wp'
			},
			beforeSend: function() {
				$('#liquid-demo-loader').addClass('is-active');

			}
		}).done(function(re) {
			$('#liquid-demo-loader').removeClass('is-active');
			if (typeof callback === 'function') {
				callback();
			}
		});
	}

	function reset_confirm_message(callback) {
		if (typeof callback === 'function') {
			callback();
		}
}

function initPopUp(demo) {

	// Popup
	var popup = $('#lqd-popup');

	// CLose
	popup.on('click', '.lqd-imp-popup-close', function() {
		popup.remove();
	});

	popup.on('click', '.agree', function() {

		var $this = $(this),
		parent = $this.parent();

		$this.is(':checked') ? parent.addClass('checked') : parent.removeClass('checked')

	})

	// Import Now
	popup.on('click', '.lqd-import-btn', function() {
		var btn = $(this);

/*
		if (!btn.prev().children('input').is(':checked')) {
			var agreeBox = btn.prev();

			agreeBox.removeClass('liquid-shake error');

			setTimeout(function() {
				agreeBox.addClass('liquid-shake error');
			}, 50)

			return;
		}
*/

		var options = [];

		btn.parent().parent().find('#lqd-import-opts .lqd-imp-opt :checked').each(function() {
			options.push($(this).val());
		});

		var importer = new liquidImporter(demo, options, demo);
	});
}
var liquidAdmin = {

	init: function() {
		this.oneCollectionLazyLoad();
		this.initTabs();
		this.filterDemos('wpbakery');
		this.initDemo();
		this.initIconpicker();
	},

	initDemo: function() {

		$('.lqd-solid-wrap').on('click', '.lqd-import-popup', function() {
			//exit if we found any error message
			if ($('.liquid-error-message').length) {
				return;
			}
			var id = $(this).data('demo-id'),

			demo = liquid_demos[id];
			var demo_id = $(this).attr('data-import-id');

			$.ajax({
				url: ajaxurl,
				type: 'GET',
				data: {
					action: 'liquid_prepare_demo_package',
					demo: id
				},
				beforeSend: function() {
					$('#liquid-demo-loader').addClass('is-active');

				}
			}).done(function(resp) {
				var jsonresp = JSON.parse(resp);
				if (jsonresp.stat === 1) {
					$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
							action: 'liquid_require_plugins',
							demo: id
						},
					}).done(function(re) {
						$('#liquid-demo-loader').removeClass('is-active');
						ret = JSON.parse(re);
						if (ret.stat == 1) {
							$(document.body).append(_.template($('#tmpl-demo-popup').html())(demo));
							initPopUp(id);

						} else if (ret.stat == 0) {
							message = message = "Please install/activate <strong>" + ret.plugins.toString() + "</strong>";
							reset_confirm_message(function() {
								$.confirm({
									title: 'Missing Required Plugins',
									content: message,
									buttons: {
										new: {
											text: 'Back to Install Plugins',
											action: function(){

												if (typeof merlin_params !== 'undefined') {
													var current_url = window.location.href;
													current_url = current_url.replace("content", "plugins");
													window.location.href = current_url;
												} else {
													var current_url = window.location.href;
													current_url = current_url.replace("liquid-import-demos", "liquid-plugins");
													window.location.href = current_url;
												}	
												
											}
										},
										confirm: {
											text: 'I understand, let\'s import, please',
											btnClass: 'btn-blue',
											keys: ['enter', 'shift'],
											action: function() {
												$(document.body).append(_.template($('#tmpl-demo-popup').html())(demo));
												initPopUp(id);
											}
										},
									}
								});
							})

						}
					})
				} else {
					$('#liquid-demo-loader').removeClass('is-active');
					var $title = 'Error:';
					var $content = 'Please, Activate Hub Core plugin';
					if( ( jsonresp.stat === 0 ) && ( jsonresp.message != null ) ) {
						$title = 'Error';
						$content = jsonresp.message;
					}
					$.confirm({
						title: $title,
						content: $content,
						buttons: {
							confirm: {
								text: 'Ok',
								btnClass: 'btn-blue',
								keys: ['enter', 'shift'],
								action: function() {}
							},
							cancel: function() {

							}
						}
					});
				}
			});

			return false;
		});
	},

	oneCollectionLazyLoad: function() {

		var collectionItem = document.querySelectorAll('.vc_ui-template');

		if ( collectionItem.length >= 0 ) {

			collectionItem.forEach(item => {

				new IntersectionObserver( ([entry], observer) => {
	
					const target = entry.target;
					const thumbImage = target.querySelector('img');
	
					if ( entry.isIntersecting ) {
						thumbImage.src = thumbImage.getAttribute('data-src');
						thumbImage.classList.add('img-loaded');
						observer.unobserve(entry.target)
					}
	
				}).observe(item);

			});

		}

	},

	initIconpicker: function() {

		if ( $.isFunction($.fn.fontIconPicker) ) {
			var iconInput = $('.liquid-icon-picker');
			iconInput.fontIconPicker();
		}

	},

	initTabs: function() {

		const activeTab = localStorage.getItem('liquid_setup_builder');
		const $lqdDemos = $('#lqd-demos');
		const $tabsNav = $('.lqd-tab-nav', $lqdDemos);
		const $navLinks = $('a', $tabsNav);
		
		// Merlin builder seection
		const $mButtonsContainer = $('.merlin__builder-buttons');
		const $mButtons = $('.merlin__builder--elementor, .merlin__builder--vc', $mButtonsContainer);

		if ( activeTab ) {

			if ( $lqdDemos.length ) {
				this.filterDemos({$demosContainer: $lqdDemos, $navLinks}, activeTab);
			}

			if ( $mButtonsContainer.length ) {
				if ( activeTab === 'wpbakery' ) {
					$mButtons.filter((i, btn) => btn.classList.contains('merlin__builder--vc')).trigger('click');
				} else if ( activeTab === 'elementor' ) {
					$mButtons.filter((i, btn) => btn.classList.contains('merlin__builder--elementor')).trigger('click');
				}
			}

		}

		$navLinks.on('click', ev => {
			ev.preventDefault();
			ev.stopPropagation();

			const $link = $(ev.target);
			const targetDemos = $link.attr('data-filter');

			this.filterDemos({$demosContainer: $lqdDemos, $navLinks}, targetDemos);

		});

	},

	filterDemos({$demosContainer, $navLinks}, activeDemos) {

		if ( ! $demosContainer || ! $navLinks || ! activeDemos ) return;

		const $tabsContent = $('.lqd-tab-content', $demosContainer);
		const $demoItems = $('.lqd-col', $tabsContent);

		$navLinks
			.removeClass('active')
			.filter((i, link) => $(link).attr('data-filter') === activeDemos).addClass('active');

		$demoItems.hide().filter((i, demoItem) => demoItem.classList.contains(activeDemos)).show();

	}

};

jQuery(document).ready(function() {
	liquidAdmin.init();
});
jQuery(document).ajaxComplete(function(e) {
	//if ( jQuery(e.target.activeElement).is( '.widget-control-save' ) ) {
		liquidAdmin.initIconpicker();
	//}
});

})(jQuery);