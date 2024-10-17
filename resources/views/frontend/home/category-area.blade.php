@php
    $category = App\Models\Category::latest()->limit(6)->get();
@endphp

<section class="category-area pb-90px">
    <div class="container">
        <div class="row align-items-center">

        </div><!-- end row -->
        <div class="category-wrapper mt-30px">
            <div class="row">
        @foreach ($category as $cat) 
        @php
      $course = App\Models\Course::where('category_id',$cat->id)->get();     
        @endphp
        <div class="col-lg-4 responsive-column-half">
            <div class="category-item">
                <img  class="cat__img lazy" src="{{ asset($cat->image) }}" data-src="{{ asset($cat->image) }}" alt="Category image">
                <div class="category-content">
                    <div class="category-inner">
                        <h3 class="cat__title"><a href="#">{{ $cat->category_name }}</a></h3>
                        <p class="cat__meta">{{ count($course ) }} courses</p>
                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-white">Explore<i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div><!-- end category-content -->
            </div><!-- end category-item -->
        </div><!-- end col-lg-4 -->
        @endforeach
               
            </div><!-- end row -->
        </div><!-- end category-wrapper -->
    </div><!-- end container -->
</section>