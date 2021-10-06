@extends('layout')

@section('content')
@include('page.banner')


  <div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
              
                <div class="about-tre">
                    <div class="a-1">
                        @foreach ($post as $post_ca )
                        <div class="col-md-6 abt-left" style="margin-top:20px"> 
                            <a href="{{route('bai-viet.show',[$post_ca->id])}}"><img with="430px" height="266px" src="{{ asset('public/up/'.$post_ca-> image) }}" alt="" /></a>
                            <h6>Find The Most</h6>
                            <h3><a href="{{route('bai-viet.show',[$post_ca->id])}}">{{substr($post_ca->title,0,20)}}</a></h3>
                            <p>{!!substr($post_ca->short_desc,0,50)!!}</p>
                            <label>May 29, 2015</label>
                            <div class="about-btn">
                                <a href="{{route('bai-viet.show',[$post_ca->id])}}">Read More</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>	
            </div>
            <div class="col-md-4 about-right heading">
               
                <div class="abt-2">
                    <h3>Bài Viết Mới Nhất</h3>
                    @foreach ($new_post as $key => $nps)
                        <div class="might-grid">
                            <div class="grid-might">
                                <a href="{{route('bai-viet.show',[$post_ca->id])}}"><img  with="86px" height="84px" src="{{ asset('public/up/'.$post_ca-> image) }}" class="img-responsive" alt=""> </a>
                            </div>
                            <div class="might-top">
                                <h4><a href="{{route('bai-viet.show',[$post_ca->id])}}">{{substr($post_ca->title,0,20)}}</a></h4>
                                <p>{!!substr($post_ca->short_desc,0,50)!!} </p> 
                            </div>
                            <div class="clearfix"></div>
                        </div>	
                    @endforeach				
                </div>
                <div class="abt-2">
                    {{-- <h3>Bài Viết Xem Nhiều </h3>
                    <ul>
                        <li><a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
                        <li><a href="single.html">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
                        <li><a href="single.html">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a> </li>
                        <li><a href="single.html">It has survived not only five centuries, but also the leap into electronic typesetting</a> </li>
                        <li><a href="single.html">Remaining essentially unchanged. It was popularised in the 1960s with the release of </a> </li>
                        <li><a href="single.html">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a> </li>
                        <li><a href="single.html">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a> </li>
                    </ul>	
                </div> --}}
                <div class="abt-2">
                    <h3>NEWS LETTER</h3>
                    <div class="news">
                        <form>
                            <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>			
        </div>		
    </div>
</div>

@endsection