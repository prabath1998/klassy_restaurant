<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach ($data as $data)

                <form action="{{ url('/addtocart',$data->id) }}" method="POST">
                    @csrf
                    <div class="item">
                        <div class='card' style="background-image: url('/foodimage/{{ $data->image }}')">
                            <div class="price">
                                <h6>{{ $data->price }}</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{ $data->title }}</h1>
                                <p class='description'>{{ $data->description }}.</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="number" name="quantity" min="1" value="1" style="width: 80px" class="w-full px-4 py-2 text-base font-normal text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            <input type="submit" value="Add to cart"
                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        </div>
                    </div>
                </form>

                @endforeach

            </div>
        </div>
    </div>
</section>
