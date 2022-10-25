<template>
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">System setting</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <router-link :to="{name:'dashboard'}">Dashboard</router-link>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">System setting</a>
                                    </li>
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
                                    <h4 class="card-title">Update your system infomation.</h4>
                                </div>
                                <hr/>
                                <div class="card-body">
                                    <form action="javascript:void(0)" @submit="submitdata" method="post" enctype="multipart/form-data"  class="form form-horizontal">
                                        <div class="row">
                                            
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="fname-icon">Site name</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text">
                                                            <vue-feather type="edit" style="width:15px"></vue-feather>
                                                            </span>
                                                            <input type="text" name="site_name" v-model="sdata.site_name" id="site_name" class="form-control" placeholder="Enter site name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="fname-icon">Site phone</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text">
                                                            <vue-feather type="edit" style="width:15px"></vue-feather>
                                                            </span>
                                                            <input type="text" name="site_phone" v-model="sdata.site_phone" id="site_phone" class="form-control" placeholder="Enter site phone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="fname-icon">Site email</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text">
                                                            <vue-feather type="edit" style="width:15px"></vue-feather>
                                                            </span>
                                                            <input type="text" name="site_email" v-model="sdata.site_email" id="site_email" class="form-control" placeholder="Enter site email">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="fname-icon">Site logo</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <center>
                                                            <img v-bind:src="'/settingimages/' + sdata.site_logo"  alt="" style="width:100px" @error="replaceByDefault" />
                                                        </center>    
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text">
                                                               <vue-feather type="edit" style="width:15px"></vue-feather>
                                                            </span>
                                                            <input type="file" name="site_logo" v-on:change="onImageChange" ref="file" id="site_logo" class="form-control" placeholder="Enter site logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="fname-icon">Site favicon</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <center>
                                                           <img v-bind:src="'/settingimages/' + sdata.site_favicon"  alt="" style="width:100px" @error="replaceByDefault" />
                                                        </center>   
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text">
                                                              <vue-feather type="edit" style="width:15px"></vue-feather>
                                                            </span>
                                                            <input type="file" name="site_favicon" v-on:change="onImageChange2" ref="file" id="site_favicon" class="form-control" placeholder="Enter site favicon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="contact-icon">Site description</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <!-- <quill-editor v-model:content="sdata.site_description" theme="snow" toolbar="full" /> -->
                                                        <VueEditor v-model="sdata.site_description" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="fname-icon">SMS API</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text">
                                                            <vue-feather type="edit" style="width:15px"></vue-feather>
                                                            </span>
                                                            <input type="text" name="site_sms_api" v-model="sdata.site_sms_api" id="site_sms_api" class="form-control" placeholder="Enter site sms api">
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
    name:"setting",
    data(){
        return {
            user:this.$store.state.auth.user,
            sdata:{
                site_name:"",
                site_phone:"",
                site_email: "",
                site_logo:"",
                site_logo_view:"",
                site_favicon:"",
                site_favicon_view:"",
                site_description:"",
                site_sms_api:"",
            },
            processing:false,
            loadingsms:false,
            loadingdata:false,
        }
    },
    created(){
        //this.$emit("changeActiveMenu", 2); 
        this.$emit("checkAuth");
        this.loadingsms = true;
        this.loadingdata = true;
        axios
            .get(`/api/setting`)
            .then((response) => {
              this.sdata.site_name = response.data.allData.site_name;
              this.sdata.site_phone = response.data.allData.site_phone;
              this.sdata.site_email = response.data.allData.site_email;
              this.sdata.site_logo = response.data.allData.site_logo;
              this.sdata.site_logo_view = response.data.allData.site_logo;
              this.sdata.site_favicon = response.data.allData.site_favicon;
              this.sdata.site_favicon_view = response.data.allData.site_favicon;
              this.sdata.site_description = response.data.allData.site_description;
              this.sdata.site_sms_api = response.data.allData.site_sms_api;
              this.loadingdata = false;
        });
        axios
            .get(`/api/getsmsbalace`)
            .then((response) => {
              this.user.sms_useage = response.data.sms_useage;
              this.loadingsms = false;
        });
		window.scrollTo(0, 0);
    },
    methods:{
        replaceByDefault(e) {
                e.target.src = "/no-image-available.png";
        },
        onImageChange(e)
		{
            this.sdata.site_logo = e.target.files[0];
        },
        onImageChange2(e)
		{
            this.sdata.site_favicon = e.target.files[0];
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
            formData.append('site_name', this.sdata.site_name);
            formData.append('site_phone', this.sdata.site_phone);
            formData.append('site_email', this.sdata.site_email);
            formData.append('site_logo', this.sdata.site_logo);
            formData.append('site_favicon', this.sdata.site_favicon);
            formData.append('site_description', this.sdata.site_description);
            formData.append('site_sms_api', this.sdata.site_sms_api);

            axios.post('/api/setting-update', formData, config)
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
                          this.sdata.site_name = res.data.allData.site_name;
                          this.sdata.site_phone = res.data.allData.site_phone;
                          this.sdata.site_email = res.data.allData.site_email;
                          this.sdata.site_logo = res.data.allData.site_logo;
                          this.sdata.site_logo_show = res.data.allData.site_logo;
                          this.sdata.site_favicon = res.data.allData.site_favicon;
                          this.sdata.site_favicon_show = res.data.allData.site_favicon;
                          this.sdata.site_description = res.data.allData.site_description;
                          this.sdata.site_sms_api = res.data.allData.site_sms_api;

                          this.$swal.fire({
                           icon: 'success',
                            text: res.data.message,
                            showConfirmButton: true,
                            timer: 6000
                         })
                      }
            })
            .catch((error) => {
                console.log(error);
           });

        }
    },
    mounted (){
        window.scrollTo(0, 0);
        this.$emit("changeActiveMenu", 2);    
    },
}
</script>