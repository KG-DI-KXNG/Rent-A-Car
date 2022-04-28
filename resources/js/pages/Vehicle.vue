<template>
    <div class="" >
        
        <side-nav />
        <div class="container-fluid col-10" id="content-wrapper" >
        <top-nav />
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Vehicles</h1>
          

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-inline-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        All Vehicles
                    </h6>

                    <button class="collapse-item btn btn-primary" type="button" data-toggle="modal" data-target="#form"> Add New</button>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div
                            id="dataTable_wrapper"
                            class="dataTables_wrapper dt-bootstrap4"
                        >
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div
                                        class="dataTables_length"
                                        id="dataTable_length"
                                    >
                                        <label
                                            >Show
                                            <select
                                                name="dataTable_length"
                                                aria-controls="dataTable"
                                                class="custom-select custom-select-sm form-control form-control-sm"
                                            >
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            entries</label
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table
                                        class="table table-bordered dataTable"
                                        id="dataTable"
                                        width="100%"
                                        cellspacing="0"
                                        role="grid"
                                        aria-describedby="dataTable_info"
                                        style="width: 100%"
                                    >
                                        <thead>
                                            <tr role="row">
                                                <th
                                                    class="sorting sorting_asc"
                                                    tabindex="0"
                                                    aria-controls="dataTable"
                                                    rowspan="1"
                                                    colspan="2"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 117px"
                                                >
                                                    Vehicle Details
                                                </th>
                                                <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="dataTable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 184px"
                                                >
                                                    Reg #
                                                </th>
                                                <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="dataTable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 80px"
                                                >
                                                    Seats
                                                </th>
                                               
                                                <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="dataTable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Start date: activate to sort column ascending"
                                                    style="width: 76px"
                                                >
                                                    Per Day Rate
                                                </th>
                                                 <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="dataTable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Age: activate to sort column ascending"
                                                    style="width: 31px"
                                                >
                                                    Last Rented
                                                </th>
                                                <!-- <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="dataTable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 67px"
                                                >
                                                    Salary
                                                </th> -->
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="2">
                                                    Vehicle Details
                                                </th>
                                                <!-- <th rowspan="1" colspan="1">
                                                    Position
                                                </th> -->
                                                <th rowspan="1" colspan="1">
                                                    Reg #
                                                </th>
                                                <th rowspan="1" colspan="1">
                                                    Seats
                                                </th>
                                                <th rowspan="1" colspan="1">
                                                    Per Day Rate
                                                </th>
                                                <th rowspan="1" colspan="1">
                                                    Last Rented
                                                </th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!-- <tr class="odd">
                                                <td class="sorting_1">
                                                    Airi Satou
                                                </td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr> -->
                                            <tr class="even" v-for="(car, car_index) in paginated" :key="car.id">
                                                <td class="sorting_1">
                                                    {{car.Make}}
                                                </td>
                                                <td>
                                                    {{car.year+' - '+car.Model}}
                                                </td>
                                                <td>{{car.license_no}}</td>
                                                <td>{{car.capacity}}</td>
                                                <td>${{car.price}}</td>
                                                <td>

                                                      <a
                                                    href="javascript:void(0)"
                                                    class="mr-2"
                                                    ><i
                                                        class="fa fa-pencil"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    ></i
                                                ></a>
                                                <a href="javascript:void(0)"  @click.prevent="deleteVehicle(car.id, car_index)"
                                                    ><i
                                                        class="fa fa-trash"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Delete"
                                                    ></i
                                                ></a>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div
                                        class="dataTables_info"
                                        id="dataTable_info"
                                        role="status"
                                        aria-live="polite"
                                    >
                                        Showing {{page - 1 + page}} to 10 of {{JSON.parse(vehicles).length}} entries
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div
                                        class="dataTables_paginate paging_simple_numbers"
                                        id="dataTable_paginate"
                                    >
                                        <ul class="pagination">
                                            <li
                                                class="paginate_button page-item previous"
                                                :class="{'disabled':page==1}"
                                                id="dataTable_previous"
                                            >
                                                <a
                                                    href="#"
                                                    @click="page--"
                                                    aria-controls="dataTable"
                                                    data-dt-idx="0"
                                                    tabindex="1"
                                                    class="page-link"
                                                    >Previous</a
                                                >
                                            </li>
                                            <!-- <li
                                                class="paginate_button page-item active"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="dataTable"
                                                    data-dt-idx="1"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >1</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="dataTable"
                                                    data-dt-idx="2"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >2</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="dataTable"
                                                    data-dt-idx="3"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >3</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="dataTable"
                                                    data-dt-idx="4"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >4</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="dataTable"
                                                    data-dt-idx="5"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >5</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="dataTable"
                                                    data-dt-idx="6"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >6</a
                                                >
                                            </li> -->
                                            <li
                                                class="paginate_button page-item next"
                                                id="dataTable_next"
                                                :class="{'disabled':page == parseInt(JSON.parse(vehicles).length / 10 + 1)}"
                                            >
                                                <a
                                                    href="#"
                                                    @click="page++"
                                                    aria-controls="dataTable"
                                                    data-dt-idx="7"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >Next</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="#form" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Vehicle Rental</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Make</label>
                                <input type="text" v-model="vehicle.make" class="form-control" id="validationCustom01" value="Mark" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Model</label>
                                <input type="text" v-model="vehicle.model" class="form-control" id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                          <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Year</label>
                                <select v-model="vehicle.year" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option v-for="i in year" :key="i" :value="i" >{{i}}</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid year.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Registration #</label>
                                <input type="text" v-model="vehicle.lic" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                Please provide a valid Registration number.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label">Rental Fee</label>
                                <input type="number" v-model="vehicle.price" class="form-control" id="validationCustom04" required>
                                <div class="invalid-feedback">
                                Please provide a valid Amount.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Color</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                Please provide a valid color.
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="category">Category</label>
                                <select id="category" v-model="vehicle.cat" name=""  class="form-control">
                                <option v-for="(cat, cat_index ) in categories" :key="cat_index" :value="cat" >{{cat}}</option>
                                </select>
                            </div>
                            
                            </form>
                          
                         
                          <div class="form-group">
                                    <label for="">Vehicle Images (max:3)<i class="text-danger">*</i></label>
                                    <!-- <input type="image" class="form-control" placeholder="Enter post image link" name="post_image" v-model="post.thumbnail_image" required> -->

                                      <file-pond
                                        class="w-100-percent"
                                        name="post_image"
                                            label-idle="Drop Media Here or Click to Add ..."
                                            required
                                            accepted-file-types="image/jpeg, image/png"
                                            instant-upload="false"
                                            :files="t_image"
                                             max-files="3"
                                            allow-multiple="true"
                                            v-on:updatefiles="handleFilePondUpdateFile"
                                            :imagePreviewMinHeight="100"
                                            :imagePreviewMaxHeight="150"
                                            maxFileSize="50MB"
                                        />
                                    
                                </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                          <button type="submit" @click.prevent="addVehicle()" class="btn btn-success">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
    </div>
</template>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

<script>
import SideNav from "../components/SideNav.vue";
import TopNav from "../components/TopNav.vue";

import axios from 'axios';
import vueFilePond from "vue-filepond";

// // Import FilePond styles
import "filepond/dist/filepond.min.css";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";
// // Import FilePond plugins
// // Please note that you need to install these plugins separately

// // Import image preview plugin styles


// Import image preview and file type validation plugins
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import ContentLinkPreview from '../components/LinkPreview.vue'

import Pagination from 'vue-pagination-2';

// Create component
const FilePond = vueFilePond(
  FilePondPluginFileValidateType,
  FilePondPluginImagePreview,
  FilePondPluginFileValidateSize
);
export default {
    components: { SideNav, TopNav, FilePond, ContentLinkPreview, Pagination},
    name: "admin-vehicle",
    props:['vehicles'],
    data(){
      return{
        vehicle:{
          make:'',
          model:'',
          capacity:'5',
          year:'2010',
          color:'#000000',
          lic:'',
          cat:'Sedan',
          price:0
        },
        categories:['Suv', "Sedan", 'Hatch Back', "Minivan"],
        year:[],
        t_image:'',
        myFiles: [],
        page: 1,
        pageSize: 10
      }
    },
    // watch:{

    // },
    computed: {
        indexStart() {
            return (this.page - 1) * this.pageSize;
        },
        indexEnd() {
            return this.indexStart + this.pageSize;
        },
        paginated() {

            return JSON.parse(this.vehicles).slice(this.indexStart, this.indexEnd);
        },
    },
    methods:{
      handleFilePondUpdateFile(files){
        this.myFiles = files.map(files => files.file);
      },
      
      deleteVehicle(id, index){
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                axios.post(`/remove-vehicle/${id}`)
                .then(()=>{
                     Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    ).then(()=>{
                        if(result.isConfirmed){
                            location.reload();
                        }
                    })
                })
                // location.reload();
                // return this.paginated
                
                // console.log(this.paginated) 
            }
            })
           
      },
  
      addVehicle(){

          const formData = new FormData();
                formData.append("make", this.vehicle.make);
                formData.append("model", this.vehicle.model);
                formData.append("year", this.vehicle.year);
                formData.append("color", this.vehicle.color);
                formData.append("lic", this.vehicle.lic);
                formData.append("cat", this.vehicle.cat);
                formData.append("price", this.vehicle.price);

                 for (var i = 0; i < this.myFiles.length; i++) {
                    let file = this.myFiles[i];
                    formData.append("files[" + i + "]", file);
                }
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
                axios.post('/add-vehicle', formData, config)
                .then((response) => {
                        // document.getElementById('form').modal('hide')  

                        this.vehicle.make='',
                        this.vehicle.model='',
                        this.vehicle.capacity='5',
                        this.vehicle.year='2010',
                        this.vehicle.color='#000000',
                        this.vehicle.lic='',
                        this.vehicle.cat='Sedan',
                        this.vehicle.price=0;
                        this.myFiles=[];
                     

                        const Toast = Swal.mixin({
                            toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                        })

                        Toast.fire({
                        icon: 'success',
                        title: 'Successfully Added'
                        }).then((result)=>{
                            if(result.dismiss === Swal.DismissReason.timer){
                                location.reload();
                            }
                        })
                         $('#form').on('hidden.bs.modal', function (e) {
                                location.reload();
                        })
                       
                    })
                    .catch(errors=> {
                        var errors = errors.response.data.errors
                        // console.log(Object.values(errors))
                        Object.values(errors).forEach((error, index)=> {
                           const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            iconColor: 'white',
                            customClass: {
                                popup: 'colored-toast'
                            },
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                            })

                            Toast.fire({
                                icon: 'error',
                                title: 'Error',
                                html:`${error}`,
                            })
                        });
                    })
      },
      yearCal(){
        for(let i=2010;i<2022;i++){
          this.year.push(i)
        }
      }
    },
    mounted(){
      this.yearCal();
    }
    
};
</script>

<style >
.colored-toast.swal2-icon-error {
  background-color: #f27474 !important;
}
</style>

