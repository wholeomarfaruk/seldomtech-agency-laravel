 @props(['service'])
 <div class="card-three item">
     <div class="content">
         <div class="icon">
             <img src="{{ asset('assets/images/icons/flower.svg') }}" alt="" />
         </div>
         <div class="text">
             <h3>{{$service?->name ?? 'High-Quality Video Generation'}}</h3>
             <p>
                 {{$service?->description ?? 'Input your vision. Get crisp, high-def videos — all powered by AI.'}}
             </p>
         </div>
         <div class="buttons">

             <a href="#" class="btn px-10! py-1">Build Mine <i
                     class="bx bx-right-arrow-alt bx-fade-right"></i> </a>
         </div>
     </div>
 </div>
