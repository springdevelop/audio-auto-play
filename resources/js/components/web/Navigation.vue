<style lang="scss" scoped>
    .navbar-default{
        background: transparent;
        border: none;
        .navbar-brand {
            height: auto;
        }
        #nxshield-navbar-collapse{
            margin-top: 50px;
            font-size: 1em;
            font-weight: 100;
            .navbar-nav>li>a {
                padding: 10px 25px;
                color: #fff;
            }
            .btn {
                border-radius: 6px;
                background: transparent;
                border: 1px solid #FFFFFF;
            }
        }
    }
   
</style>
<template>
 <nav class="navbar navbar-default" id="mainNav">
    <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="/images/logo.png">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="nxshield-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#Modal" @click="modal_register()">Register</a></li>
                    <li>
                        <a class="btn btn-default" href="#" data-toggle="modal" data-target="#Modal" @click="modal_login()">
                            Sign In
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
    </div>
    <!-- <modal></modal> -->
</nav>
</template>
<script>
// import Modal from './Modal.vue'
export default {
    components: {
        // Modal
    },
    methods: {
        modal_login() {
            let data = {
                name: 'login',
                title: 'Sign In'
            }
        //    this.$store.dispatch('makeModalComponent',data); 
        },
        modal_register() {
            let data = {
                name: 'register',
                title: 'Register'
            }
        //    this.$store.dispatch('makeModalComponent',data); 
        }  
    },
}
</script>
