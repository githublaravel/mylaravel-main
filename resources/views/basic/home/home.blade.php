@extends('layouts.user.master')
@section('title')
    mySite
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-1">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4  p-1">
                <div class="row">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner n-control ">
                            <div class="carousel-item n-control active">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner n-control">
                            <div class="carousel-item active">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container p-1">
            <div class="row p-1 row-article" style="margin: auto">
                <h3>جدید ترین مقاله ها:</h3>
                <hr>
                <div class="row" style="margin: auto">
                    <h4 class="title"><select class="category-select"
                            style="border: none;background-color: rgba(255, 0, 0, 0)">
                            <option>
                                اخبار روز دنیا
                            </option>
                            <option>cat-2</option>
                            <option>cat-3</option>
                            <option>cat-4</option>
                        </select></h4>
                </div>
                <section class="splide splide-1-1" aria-labelledby="carousel-heading" dir="ltr">

                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide article">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون
                                            و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <br>
            <div class="row p-1 row-article" style="margin: auto">
                <div class="row" style="margin: auto">
                    <h4 class="title"><select class="category-select"
                            style="border: none;background-color: rgba(255, 0, 0, 0)">
                            <option>
                                اخبار روز دنیا
                            </option>
                            <option>cat-2</option>
                            <option>cat-3</option>
                            <option>cat-4</option>
                        </select></h4>
                </div>

                <section class="splide splide-1-2" aria-labelledby="carousel-heading" dir="ltr">

                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide article">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با
                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card card-article" dir="rtl">
                                    <img src="{{ asset('image/blog.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">موضوع</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون
                                            و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.</p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <br>
            <div class="row p-1" style="margin: auto">
                <h4>جدید ترین پرسش ها : </h4>
                <hr>
                <div class="row" style="margin: auto">
                    <h4 class="title"><select class="category-select"
                            style="border: none;background-color: rgba(255, 0, 0, 0)">
                            <option>
                                اخبار روز دنیا
                            </option>
                            <option>cat-2</option>
                            <option>cat-3</option>
                            <option>cat-4</option>
                        </select></h4>
                </div>
                <div class="col-6 col-md-5">

                    <section class="splide splide-2-1" aria-labelledby="carousel-heading" dir="rtl">
                        {{-- <h2 id="carousel-heading">دسته بندی 1:</h2> --}}
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-6 col-md-5">
                    <section class="splide splide-2-2" aria-labelledby="carousel-heading" dir="rtl">
                        {{-- <h2 id="carousel-heading">دسته بندی 1:</h2> --}}
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون
                                            و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>


                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        <br>
                    </section>
                </div>
                <br>
                <hr class="hr-slide">
                <div class="col-12 col-md-2 col-cat">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-success">
                            <h6 class="card-title" style="text-align: center">دسته بندی های پر بازدید</h6>
                        </div>
                        <div class="card-body text-success">
                            <a href="#" class="btn btn-outline-success">دسته 1</a>
                            <a href="#" class="btn btn-outline-success">دسته 1</a>
                            <a href="#" class="btn btn-outline-success">دسته 1</a>

                            <a href="#" class="btn btn-outline-success">دسته 1</a>
                        </div>
                        <div class="card-footer bg-transparent border-success" style="margin: auto"> <a href="#"
                                class="btn btn-outline-info">مشاهده بیشتر-></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-1" style="margin: auto">

                <div class="row" style="margin: auto">
                    <h4 class="title"><select class="category-select"
                            style="border: none;background-color: rgba(255, 0, 0, 0)">
                            <option>
                                اخبار روز دنیا
                            </option>
                            <option>cat-2</option>
                            <option>cat-3</option>
                            <option>cat-4</option>
                        </select></h4>
                </div>
                <div class="col-6 col-md-5">

                    <section class="splide splide-2-3" aria-labelledby="carousel-heading" dir="rtl">
                        {{-- <h2 id="carousel-heading">دسته بندی 1:</h2> --}}
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-6 col-md-5">
                    <section class="splide splide-2-4" aria-labelledby="carousel-heading" dir="rtl">
                        {{-- <h2 id="carousel-heading">دسته بندی 1:</h2> --}}
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card-body bg-light rounded">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                            و
                                            با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون
                                            و
                                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای
                                            متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                                            حال
                                            و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                                            بیشتری
                                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                                            فارسی
                                            ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                            استفاده قرار گیرد.
                                        </p>


                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                        <a href="#" class="btn btn-primary" style="width: 100%">دیدن</a>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        <br>
                    </section>
                </div>
                <br>
                <hr class="hr-slide">
                <div class="col-12 col-md-2">
                    <div class="card border-success mb-3" style="max-width: 18rem;height: 100%">
                        <div class="card-header bg-transparent border-success">
                            <h6 class="card-title" style="text-align: center">وضعیت</h6>
                        </div>
                        <div class="card-body text-success">
                            <p class="h6">تعداد کاربران آنلاین : <span></span></p>
                            <p class="h6">تعداد مهمان ها : <span></span></p>
                            <p class="h6">تعداد مقاله ها : <span></span></p>
                            <p class="h6">تعداد پرسش ها : <span></span></p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        @endsection
        @section('end')
            <script src="{{ asset('js/slider.js') }}"></script>
        @endsection
