<?php
/* Template Name: riski
Template Post Type: post, page, single
*/
?>
<?php include 'header.php'; ?>
    <main class="ref-page">
    <div class="ref-wrapper">
          
            <span class="blur2 position-dif11"></span>
            <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">
            <div class="container">
                <h2 class="title text-center fw-bold mb-1 mb-md-4 ">
                    Торговля драгоценными металлами
                </h2>
                <div class="box7  position-relative mb-3 mb-md-5 pb-xl-5">
             <div class="container">
                    <div class="row justify-content-center">
                    
                </div> <!-- end conta
                </div><!-- end box7 -->
               <p id="blockText"  class="description &nbsp;mb-3 mb-md-4 mb-lg-5" style="text-align: center;"> Торгуйте CFD на тысячи акций со всего мира и получайте выгоду от сверхбыстрого исполнения ордеров и конкурентных торговых условий.Торгуйте CFD на акции некоторых из крупнейших и самых популярных компаний США, Великобритании и ЕС. Торгуйте CFD на акции некоторых из крупнейших и самых популярных компаний США, Великобритании и ЕС. </p> </div>          </div>          <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">
               
               <?php echo do_shortcode('[stock_market_widget type="ticker-quotes" template="chart2" color="#38443E" assets="MSFT,AAPL,FB,GOOG,TSLA,NFLX,AMZN" animation="true" api="yf" speed="50" direction="left" pause="true"]'); ?>
               </div>
                <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">

                  
                <?php echo do_shortcode('[stock_market_widget type="comparison" template="cards" color="#7EAC93" assets="MSFT,AAPL,FB,AMZN,GOOG" fields="name,change_abs,change_pct,volume,dividend_yield,eps,pe_ratio,shares_outstanding,market_cap,chart" api="yf" chart_range="1mo" chart_interval="1d"]'); ?>
                  
                   <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">
</div>
                  <?php echo do_shortcode('[stock_market_widget type="comparison" template="color-background2" color="#19281F" assets="MSFT,AAPL,FB,GOOG,TSLA" fields="name,change_abs,change_pct,volume,dividend_yield,eps,pe_ratio,shares_outstanding,market_cap,chart"  api="yf" chart_range="1mo" chart_interval="1d"]'); ?>
                  <?php echo do_shortcode(' [stock_market_widget type="search" template="quote3" color="#27BD5A" api="yf" assets="MSFT"]
                  '); ?>
                    
                  <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">
</div>
                
               
                <div class="d-flex justify-content-center align-items-center mb-5 mb-md-0">
                <a href="#" class="btn btn-gold fw-bold rs">
                    <p>
                        Участвовать
                    </p>
                </a>
                </div>

            </div> <!-- end container -->
            </div><!-- end box2 -->    
            <span class="blur1 position-dif"></span>
            <p class="description text-center mb-3 mb-md-4 mb-lg-5">
             15% от брокерской комиссии по всем клиентам партнера. Выплачивается ежемесячно в течении года с момента регистрации клиента.
            </p>

            <span class="blur3 position-dif2"></span>
        </div> 
    </main>
<?php include 'footer.php'; ?>
<!-- END header -->






















