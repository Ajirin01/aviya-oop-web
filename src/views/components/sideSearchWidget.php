<div class="aa-properties-single-sidebar">
    <h3>Properties Search</h3>
    <form action="results" method="GET">
    <div class="aa-single-advance-search">
        <input type="text" placeholder="Please enter keyword" name="title" required>
    </div>
    <!-- <div class="aa-single-advance-search">
        <select id="" name="">
        <option selected="" value="0">Category</option>
        <option value="1">Flat</option>
        <option value="2">Land</option>
        <option value="3">Plot</option>
        <option value="4">Commercial</option>
        </select>
    </div>
    <div class="aa-single-advance-search">
        <select id="" name="">
        <option selected="" value="0">Type</option>
        <option value="1">Flat</option>
        <option value="2">Land</option>
        <option value="3">Plot</option>
        <option value="4">Commercial</option>
        </select>
    </div>
    <div class="aa-single-advance-search">
        <select id="" name="">
        <option selected="" value="0">Type</option>
        <option value="1">Flat</option>
        <option value="2">Land</option>
        <option value="3">Plot</option>
        <option value="4">Commercial</option>
        </select>
    </div> -->
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
    <div class="aa-single-advance-search">
        <input type="submit" value="Search" class="aa-search-btn">
    </div>
    </form>
</div> 