@extends('layout')
@section('content')

<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                <div class="about-one">
                    {{-- <p>Find The Most</p> --}}
                    <h3>{{$title -> title}}</h3>
                </div>
                <div class="about-two">
                    {{-- <a href="single.html"><img src="images/c-1.jpg" alt="" /></a>
                    <p>Posted by <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
                    <p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>
                    <p>Quisque ultrices ligula a nisl porttitor, vitae porta tortor eleifend. Nulla nec imperdiet ipsum, ut cursus mauris. Proin ut sodales sem, quis vestibulum libero. Proin tempor venenatis congue. Phasellus mollis massa sit amet pharetra consequat. Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
                    <ul> --}}
                        <ul>
                        <li><p>Share : </p></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
                </div>	
                <div class="about-tre">
                   
                   
                    <div class="a-1">
                        @foreach ($post_Category as $post_ca )
                        <div class=" row" style="margin: 5px" >
                            <div class="col-md-6 abt-left">
                                <a href="{{route('bai-viet.show',[$post_ca->id])}}"><img with="100%" src="{{ asset('public/up/'.$post_ca -> image) }}" alt="{{Str::slug($post_ca -> title)}}"></a>
                            </div>
                            <div class="col-md-6 abt-left">
                                <h6>{{$post_ca-> category -> title}}</h6>
                
                                <h3><a href="{{route('bai-viet.show',[$post_ca->id])}}">{{$post_ca -> title}}</a></h3>
                                <p>{!!substr($post_ca->short_desc,0,150)!!}  </p>
                                <label>May 29, 2015</label>
                                <div class="about-btn">
                                    <a href="{{route('bai-viet.show',[$post_ca->id])}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>	
            </div>
            <div class="col-md-4 about-right heading">
               

                    <div class="abt-2">
                        <h3>Bài Viết Mới Nhất</h3>
                        @foreach ($new_post as $key => $nps)
                            <div class="might-grid">
                                <div class="grid-might">
                                    <a href="{{route('bai-viet.show',[$nps->id])}}"><img  with="86px" height="84px" src="{{ asset('public/up/'.$nps-> image) }}" class="img-responsive" alt=""> </a>
                                </div>
                                <div class="might-top">
                                    <h4><a href="{{route('bai-viet.show',[$nps->id])}}">{{substr($nps->title,0,20)}}</a></h4>
                                    <p>{!!substr($nps->short_desc,0,50)!!} </p> 
                                </div>
                                <div class="clearfix"></div>
                            </div>	
                        @endforeach				
                    </div>
                {{-- <div class="abt-2">
                    <h3>ARCHIVES</h3>
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