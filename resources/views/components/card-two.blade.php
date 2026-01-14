 @props(['service'])
 <div class="card-two item">
     <div class="content">
         <div class="icon">
             <img src="{{ asset('assets/images/icons/flower.svg') }}" alt="" />
         </div>
         <div class="text">
             <h3>{{$service['title'] ?? 'High-Quality Video Generation'}}</h3>
             <p>
                 {{$service['description'] ?? 'Input your vision. Get crisp, high-def videos — all powered by AI.'}}
             </p>
         </div>
     </div>
 </div>
