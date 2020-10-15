@include('custom.header')


    <section class="section section-search">
        <div class="container-fluid">
            <div class="banner-wrapper">
                <div class="banner-header text-center">
                    <h1>Search Teacher by Campus, Make an Appointment</h1>
                    <p>Discover the dept. wise teacher in your nearest campus</p>
                </div>

                <!-- Search -->
                <div class="search-box">
                    <form action="{{ route('search.doctorProfile') }}" method="get">
                        <div class="form-group search-location">
                            <select type="text" name="area" class="form-control" placeholder="Select Location">

                                @php($areas = \App\Area::all())
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{$area->area_name}}</option>
                                    @endforeach

                            </select>
                            <span class="form-text">Based on your Location</span>
                        </div>
                        <div class="form-group search-info">
                            <select type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
                                @php($categories = \App\Category::all())
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach

                            </select>
                            <span class="form-text">Ex : CSE or BBA, SWE etc</span>
                        </div>
                        <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
                    </form>
                </div>
                <!-- /Search -->

            </div>
        </div>
    </section>
    <!-- /Home Banner -->



@include('custom.footer')
