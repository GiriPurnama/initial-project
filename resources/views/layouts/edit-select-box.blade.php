<div class="form-group">
    <label for="">Select Page</label>
    <select class="form-control" name="select_page" id="page" required>
        <option data-img="{{ URL::asset('images/page-design/Default.png')}}" value="default" {{$getDetail->select_page == 'default' ? 'Selected' : '' }}>Default</option>
        <option data-img="{{ URL::asset('images/page-design/DoubleBox.png')}}" value="industries" {{$getDetail->select_page == 'industries' ? 'Selected' : '' }}>Double Box</option>
        <option data-img="{{ URL::asset('images/page-design/SingleBox.png')}}" value="benefits" {{$getDetail->select_page == 'benefits' ? 'Selected' : '' }}>Single Box</option>
        <option data-img="{{ URL::asset('images/page-design/StaticTimeline.png')}}" value="howWeWork" {{$getDetail->select_page == 'howWeWork' ? 'Selected' : '' }}>Static Timeline</option>
        <option data-img="{{ URL::asset('images/page-design/SingleBoxWithoutBG.png')}}" value="productService" {{$getDetail->select_page == 'productService' ? 'Selected' : '' }}>Single Box Without BG</option>
        <option data-img="{{ URL::asset('images/page-design/BoxWithLink.png')}}" value="linkDoc" {{$getDetail->select_page == 'linkDoc' ? 'Selected' : '' }}>Box With Link</option>
        <option data-img="{{ URL::asset('images/page-design/Accordion.png')}}" value="faq" {{$getDetail->select_page == 'faq' ? 'Selected' : '' }}>Accordion</option>
        <option data-img="{{ URL::asset('images/page-design/DynamicTimeline.png')}}" value="dynamicTimeline" {{$getDetail->select_page == 'dynamicTimeline' ? 'Selected' : '' }}>Dynamic Timeline</option>
    </select>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box-preview"></div>
    </div>
</div>