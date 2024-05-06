<!-- Page Header Start -->
<div class="container-fluid
    @if($parent == 'biography')
        page-header-bio
    @elseif($parent == 'contact')
        page-header-contact
    @elseif($parent == 'gallery') 
        page-header-gallery
    @elseif($parent == 'event')
        page-header-event
    @elseif($parent == 'shop')
        page-header-shop
    @else
        page-header
    @endif
    mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
    </div>
</div>
<!-- Page Header End -->