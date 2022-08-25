<section id="aa-advance-search">
  <div class="container">
    <div class="aa-advance-search-area">
        <form class="form" action="results" method="GET">
            <div class="aa-advance-search-top">
            <div class="row">
                <div class="col-md-8">
                <div class="aa-single-advance-search">
                    <input type="text" placeholder="Please enter keyword" name="title" required>
                </div>
                </div>
                <div class="col-md-4">
                <div class="aa-single-advance-search">
                    <input class="aa-search-btn" type="submit" value="Search">
                </div>
                </div>
            </div>
            </div>
            <div class="aa-advance-search-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <div class="aa-single-filter-search">
                            <span>AREA (SQ Metre)</span>
                            <span>FROM</span>
                            <span id="skip-value-lower" class="example-val">30</span>
                            <span>TO</span>
                            <span id="skip-value-upper" class="example-val">100</span>
                            <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                            </div>
                            <input type="hidden" name="size" id="size">                  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aa-single-filter-search">
                            <span>PRICE (Million Naira)</span>
                            <span>FROM</span>
                            <span id="skip-value-lower2" class="example-val">5</span>
                            <span>TO</span>
                            <span id="skip-value-upper2" class="example-val">100</span>
                            <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                            </div>    
                            <input type="hidden" name="price" id="price">  
                        </div>
                    </div>
                </div>  
            </div>
        </form>
    </div>
  </div>
</section>