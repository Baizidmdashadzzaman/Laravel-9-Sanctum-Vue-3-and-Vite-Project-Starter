<template>
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Category List</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <router-link :to="{name:'dashboard'}">Dashboard</router-link>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Category management</a></li>
                                    <li class="breadcrumb-item active"><a href="#">List</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square me-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square me-1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


              <section class="invoice-list-wrapper">
                 <div class="card">
                    <div class="card-datatable table-responsive">
                       <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                          <div class="row d-flex justify-content-between align-items-center m-1">
                             <div class="col-lg-6 d-flex align-items-center">
                                
                                <div class="dt-action-buttons text-xl-end text-lg-start text-lg-end text-start ">
                                   <div class="dt-buttons">
                                        <router-link :to="{name:'categoryadd'}" class="btn btn-gradient-primary">
                                            <vue-feather :type="edit" style="width:15px" />
                                            <span> Add record</span>
                                        </router-link>
                                    </div>
                                </div>
                             </div>
                             <div class="col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pe-lg-1 p-0">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon-search1">
                                            <vue-feather type="search" style="width:15px" />
                                        </span>
                                        <input type="text" name="table_search" v-on:keyup="keymonitor" v-model="ThisIsField1"  class="form-control" placeholder="Search..." >
                                    </div>
                                </div>
                                <div class="invoice_status ms-sm-2"></div>
                             </div>
                          </div>
                          <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="singledata in alldata.data" :key="singledata">
                                            <td>{{singledata.id}}</td>
                                            <td>{{singledata.category_name}}</td>
                                            <td>{{singledata.category_code}}</td>
                                            <td>
                                                <img v-bind:src="'/Category/' + singledata.category_image"  alt="" style="width:100px" @error="replaceByDefault" />
                                            </td>
                                            <td>
                                                <span class="badge rounded-pill badge-light-success me-1" v-if="singledata.category_status == 1">Active</span>
                                                <span class="badge rounded-pill badge-light-warning me-1" v-else>Inactive</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <router-link :to="{name:'categoryedit', params: { id: singledata.id }}"  class="btn btn-gradient-primary waves-effect waves-float waves-light">Edit</router-link>
                                                    <a href="javascript:void(0)" @click="deleteData(singledata.id)" class="btn btn-gradient-primary waves-effect waves-float waves-light">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          <div class="d-flex justify-content-between mx-2 row">
                             <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" >Showing {{alldata.data.length}} entries</div>
                             </div>
                             <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" >
                                    <ul class="pagination page1-links">
                                        <!-- <Pagination  :data="alldata" @pagination-change-page="getResults" /> -->
                                        <pagination :data="alldata" @pagination-change-page="getResults">
                                            <template #prev-nav>
                                                <span>&lt;</span>
                                            </template>
                                            <template #next-nav>
                                                <span>&gt;</span>
                                            </template>
                                        </pagination>
                                    </ul>
                                </div>
                             </div>
                             <br/><br/>
                          </div>
                       </div>
                       
                       <div v-if="loadingpagedata ==true" class="b-overlay position-absolute" style="inset: 0px; z-index: 10;"><div class="position-absolute bg-white rounded-sm" style="inset: 0px; opacity: 0.71; backdrop-filter: blur(1px);"></div><div class="position-absolute" style="top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);"><span aria-hidden="true" class="spinner-border"></span></div></div>

                    </div>
                 </div>
              </section>
              
              

            </div>
        </div>
    </div>
</template>

<script>
import LaravelVuePagination from 'laravel-vue-pagination';
export default {
    name:"categorylist",
    components: {
        'Pagination': LaravelVuePagination
    },
    data(){
        return {
            user:this.$store.state.auth.user,
            alldata:[],
            processing:false,
            ThisIsField1: '',
            search:{
              query:''
            },
            loadingpagedata:true
        }
    },
    created(){
        // this.$emit("changeActiveMenu",5); 
        this.$emit("checkAuth");
        this.getResults();
    },
    mounted (){
        window.scrollTo(0, 0);
        this.$emit("changeActiveMenu",5);    
    },
    methods:{
       replaceByDefault(e) {
                e.target.src = "/no-image-available.png";
       },
       checkPermission()
       {
            if(this.$store.state.auth.user.prime_user == 0)
            {
               if(this.$store.state.auth.user.brand_permission == 0)
               {
                 this.$router.push({name:'dashboard'});
                 this.$swal.fire({
                     icon: 'warning',
                     text: 'Sorry you dont have authority to access this module.',
                     showConfirmButton: true,
                     timer: 9000
                 })
               }
            }; 
       },
       getData()
       {
            axios
                .get(`/api/category-list`)
                .then((response) => {
                    this.alldata = response.data.allData;
                    
            });
       },
       getResults(page) {
            this.loadingpagedata = true;
             if (typeof page === 'undefined') {
                 page = 1;
             }
			axios
                .get('/api/category-list/?page=' + page)
                .then((response) => {
                    this.alldata = response.data.allData;
                    this.loadingpagedata = false;                
            });
			window.scrollTo(0, 0);
            
        },
       keymonitor() {
		    this.search.query = this.ThisIsField1;
            let uri = '/api/category-search';
            axios.post(uri, this.search).then((response) => {
                 this.alldata = response.data.allData; 
            })
	   },
       deleteData(id)
       {
            this.$swal.fire({
               title: 'Are you sure?',
               text: "You won't be able to revert this!",
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes, delete it!'
           }).then((result) => {
            if (result.isConfirmed) {
                 axios
                .get(`/api/category-delete/${id}`)
                .then((response) => {
                    if(response.data.status == 0)
                      {
                        this.$swal.fire({
                           icon: 'error',
                            text: response.data.message,
                            showConfirmButton: true,
                            timer: 6000
                         })
                        this.processing = false;
                      }
                      else
                      {
                         this.alldata = response.data.allData;
                         this.$swal.fire({
                           icon: 'success',
                            text: response.data.message,
                            showConfirmButton: true,
                            timer: 6000
                         })
                      
                      }
                      
                });
             }
            })
              
       }
    },
}
</script>
