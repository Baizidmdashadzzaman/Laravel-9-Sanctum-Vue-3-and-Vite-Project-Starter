<template>
    <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Category edit</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <router-link :to="{name:'dashboard'}">Dashboard</router-link>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Category management</a></li>
                                    <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                                </ol>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                        <div class="mb-1 breadcrumb-right">
                            <div class="dropdown">
                                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square me-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square me-1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><span class="align-middle">Calendar</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <!-- Basic Horizontal form layout section start -->
                    <section id="basic-horizontal-layouts">
                        <div class="row">
                           
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Enter infomation to update data</h4>
                                        <router-link :to="{name:'categorylist'}" class="btn btn-gradient-primary">
                                            <vue-feather type="arrow-left-circle" style="width:15px" />
                                            <!-- <span> Go back to list?</span> -->
                                        </router-link>
                                    </div>
                                    <hr/>
                                    <div class="card-body">
                                        <form action="javascript:void(0)" @submit="submitdata" method="post" enctype="multipart/form-data"  class="form form-horizontal">
                                            <div class="row">
                                                
                                                <div class="col-12">
                                                    <div class="mb-1 row">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label" for="fname-icon">Category name</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text">
                                                                <vue-feather type="edit" style="width:15px"></vue-feather>
                                                                </span>
                                                                <input type="text" name="category_name" v-model="sdata.category_name" id="category_name" class="form-control" placeholder="Enter category name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1 row">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label" for="fname-icon">Category slug</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text">
                                                                <vue-feather type="edit" style="width:15px"></vue-feather>
                                                                </span>
                                                                <input type="text" name="category_slug" v-model="sdata.category_slug" id="category_slug" class="form-control" placeholder="Enter category slug" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="mb-1 row">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label" for="fname-icon">Category code</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text">
                                                                <vue-feather type="edit" style="width:15px"></vue-feather>
                                                                </span>
                                                                <input type="text" name="category_code" v-model="sdata.category_code" id="category_code" class="form-control" placeholder="Enter category code" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="mb-1 row">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label" for="fname-icon">Category image</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <center>
                                                                <img v-bind:src="'/Category/' + sdata.category_image_show"  alt="" style="width:100px" @error="replaceByDefault" />
                                                            </center>
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text">
                                                                   <vue-feather type="edit" style="width:15px"></vue-feather>
                                                                </span>
                                                                <input type="file" name="category_image" v-on:change="onImageChange" ref="file" id="category_image" class="form-control" placeholder="Enter category image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               <div class="col-12">
                                                    <div class="mb-1 row">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label" for="fname-icon">Status</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text">
                                                                <vue-feather type="edit" style="width:15px"></vue-feather>
                                                                </span>
                                                                <select name="category_status" v-model="sdata.category_status" id="category_status" class="form-control">
                                                                     <option value="1">Active</option>
                                                                     <option value="0">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-9 offset-sm-3">
                                                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">{{ processing ? "Please wait" : "Update" }}</button>
                                                    <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div v-if="loadingdata ==true" class="b-overlay position-absolute" style="inset: 0px; z-index: 10;"><div class="position-absolute bg-white rounded-sm" style="inset: 0px; opacity: 0.71; backdrop-filter: blur(1px);"></div><div class="position-absolute" style="top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);"><span aria-hidden="true" class="spinner-border"></span></div></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
    
                    </section>
                    <!-- Basic Horizontal form layout section end -->
    
    
    
                </div>
            </div>
        </div>
    </template>
    
    <script>
    import { VueEditor } from "vue3-editor";
    export default {
        components: {VueEditor},
        name:"categoryadd",
        data(){
            return {
                user:this.$store.state.auth.user,
                sdata:{
                    category_name:"",
                    category_slug:"",
                    category_code: "",
                    category_image:"",
                    category_image_show:"",
                    category_status:1,
                    id:"",
                },
                processing:false,
                loadingsms:false,
                loadingdata:false,
            }
        },
        created(){
            this.$emit("checkAuth");
            this.getData();
            window.scrollTo(0, 0);
        },
        methods:{
            getData()
            {
                this.loadingdata = true;
                axios
                .get(`/api/category-edit/${this.$route.params.id}`)
                .then((response) => { 
                    this.sdata.category_name = response.data.singledata.category_name;
                    this.sdata.category_slug = response.data.singledata.category_slug;
			        this.sdata.category_code = response.data.singledata.category_code;
                    this.sdata.category_image_show = response.data.singledata.category_image;
                    this.sdata.category_status = response.data.singledata.category_status;
                    this.sdata.id = response.data.singledata.id;
                    this.loadingdata = false;
                });
            },
            replaceByDefault(e) {
                    e.target.src = "/no-image-available.png";
            },
            onImageChange(e)
            {
                this.sdata.category_image = e.target.files[0];
            },
            submitdata(e)
            {
                e.preventDefault();
                this.processing = true;
                let currentObj = this;
                const config = 
                {
                    headers: { 'content-type': 'multipart/form-data' }
                }
                let formData = new FormData();
                formData.append('category_name', this.sdata.category_name);
                formData.append('category_slug', this.sdata.category_slug);
                formData.append('category_code', this.sdata.category_code);
                formData.append('category_image', this.sdata.category_image);
                formData.append('category_status', this.sdata.category_status);
                formData.append('id', this.sdata.id);
                axios.post('/api/category-update', formData, config)
                .then((res) => {
                    this.processing = false;
                    this.messages = res.data.msg;
                          if(res.data.status == 0)
                          {
                            this.$swal.fire({
                               icon: 'error',
                                text: res.data.message,
                                showConfirmButton: true,
                                timer: 6000
                             })
                          }
                          else
                          {
                             this.$swal.fire({
                                icon: 'success',
                                text: res.data.message,
                                showConfirmButton: true,
                                timer: 6000
                             })
                             this.$router.push({name:"categorylist"})
                          }
                })
                .catch((error) => {
                    console.log(error);
               });
    
            }
        },
        mounted (){
            window.scrollTo(0, 0);
            this.$emit("changeActiveMenu", 5);    
        },
    }
    </script>