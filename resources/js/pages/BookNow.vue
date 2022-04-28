<template>
   <div class="container-fluid">
       <section id="listing_img_slider">
  
    <div v-for="pic in Car.image" :key="pic.id">
      <img :src="`/storage/${pic.image_name}`" class="img-responsive" alt="image" width="900" height="560">
    </div>


</section>
<!--/Listing-Image-Slider-->




<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>{{ `${Car.Make} - ${Car.Model}`}}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>{{`$${Car.price} ${Car.currency}`}}</p>Per Day
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
          
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{Car.year}}</h5>
              <p>Reg.Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{Car.category.type}}</h5>
              <p>Car Type</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>{{Car.capacity}}</h5>
              <p>Seats</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
          
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Vendor Details</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                
                <p>Vehicle Pickup: {{'Kingston'}}</p>

              </div>
              
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
 
                  <tbody>

                  <p>Contact Number: {{'112'}}</p>
                  <p>Shop Address: {{'Jama'}}</p>
                  <p>city: {{'sad'}}</p>
                </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>

   
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
      
        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
          </div>
          <form method="post">
            <div class="form-group">
              <!-- <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required> -->
              <VueCtkDateTimePicker id="start" :auto-close="true" required :only-date="true" format="YYYY-MM-DD" :min-date="new Date().toISOString().slice(0, 10)" v-model="reserve.start" />
            </div>
            <div class="form-group">
              <!-- <input type="text" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required> -->
              <VueCtkDateTimePicker id="end" :auto-close="true" required :only-date="true" format="YYYY-MM-DD" :min-date="new Date(+new Date() + 86400000).toISOString().slice(0, 10)" v-model="reserve.end" />  
            </div>
            <div class="form-group">
              <textarea v-model="reserve.message" rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#ModalLoginForm">Reserve</button>
            </div>

          </form>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>


<!-- Modal -->
<!-- Modal HTML Markup -->
<div class="modal fade" id="ModalLoginForm" tabindex="-1" role="dialog" aria-labelledby="ModalLoginForm" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Net Banking Portal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
            <div class="card mx-auto w-100"> 
                  <section id="listing_img_slider">
  
                <div v-for="pic in Car.image" :key="pic.id">
                  <img :src="`/storage/${pic.image_name}`" style="width:100%" alt="image">
                </div>


            </section>
                <div class="card-title d-flex px-4 col-12">
                  <p class="item text-muted col-9">{{Car.Make}}<label class="register">&reg;</label> {{Car.Model}}</p>
                  <p class="col-3">${{Car.price}}</p>
              </div>
          </div>

          <div class="form-group">
            <label for="email1">Email address</label>
            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
          </div>
          <div class="form-group">
            <label for="password1">Account #</label>
            <input type="number" class="form-control" id="password1" placeholder="00-123-456-789">
          </div>
          <div class="form-group">
            <label for="password1">Pin or Password</label>
            <input type="password" class="form-control" id="password2" placeholder="">
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
    
    <div class="space-20"></div>
    <div class="divider"></div>

    
  </div>
</section>
   </div>
</template>

<script>
import VueCtkDateTimePicker from 'vue-ctk-date-time-picker';
import 'vue-ctk-date-time-picker/dist/vue-ctk-date-time-picker.css';

    export default {
        props:['cardetails'],
        components:{ VueCtkDateTimePicker },
        data(){
            return{
                data:[],
                reserve:{
                    start:'',
                    end:'',
                    message:''
                }
            }
        },
        computed:{
            Car(){
                return JSON.parse(this.cardetails);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="scss">
    .listing_detail_head .price_info p {
        font-size: 25px;
    }

/* .modal-content {
    padding: 0 !important;
} */
</style>