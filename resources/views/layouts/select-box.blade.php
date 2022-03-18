<div class="form-group">
    <label for="">Select Page</label>
    <select class="form-control" name="select_page" id="page" required>
        <option value="">-</option>
        <option data-img="{{ URL::asset('images/page-design/Default.png')}}" value="default">Default</option>
        <option data-img="{{ URL::asset('images/page-design/DoubleBox.png')}}" value="industries">Double Box</option>
        <option data-img="{{ URL::asset('images/page-design/SingleBox.png')}}" value="benefits">Single Box</option>
        <option data-img="{{ URL::asset('images/page-design/StaticTimeline.png')}}" value="howWeWork">Static Timeline</option>
        <option data-img="{{ URL::asset('images/page-design/SingleBoxWithoutBG.png')}}" value="productService">Single Box Without BG</option>
        <option data-img="{{ URL::asset('images/page-design/BoxWithLink.png')}}"value="linkDoc">Box With Link</option>
        <option data-img="{{ URL::asset('images/page-design/Accordion.png')}}" value="faq">Accordion</option>
        <option data-img="{{ URL::asset('images/page-design/DynamicTimeline.png')}}" value="dynamicTimeline">Dynamic Timeline</option>
    </select>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box-preview"></div>
    </div>
</div>


