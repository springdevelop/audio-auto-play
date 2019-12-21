<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="panel panel-default">
                     <h2 class="text-center text-upercase">
                        <img class="mr-1" src="@/img/equalizer.gif" />Radio online
                    </h2>
                    <div class="panel-heading text-center">
                        <img src="@/img/logomoi.png" alt="logo hueic" />
                        <h4>Đăng nhập tài khoản</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                        <input
                                            id="email"
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            value=""
                                            required
                                            autofocus
                                            placeholder="Nhập email đăng nhập"
                                        />
                                </div>

                                <div class="form-group">
                                        <input
                                            id="password"
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            required
                                            placeholder="Mật khẩu"
                                        />
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input
                                                type="checkbox"
                                                name="remember"
                                            />
                                            Ghi nhớ đăng nhập.
                                        </label>
                                    </div>
                                </div>
                                <router-link tag="a" class="btn btn-lg btn-primary col-md-12" to="/dashboard" id="login-button">Đăng nhập
                                </router-link>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            email: "",
            password: ""
        };
    }
};
</script>

<style scoped>
.panel.panel-default {
    margin: auto;
    border-radius: 4px;
}
.panel.panel-default h2{
    margin-bottom: 0;
    padding-bottom: 20px;
    margin-top: 10%;
}
.panel-default > .panel-heading {
    padding: 10px 15px;
    color: #333333;
    background-color: rgba(19, 35, 47, 0.9);
    border-color: #d3e0e9;
    border-top: 6px solid #F06D3E;
    border-radius: 0;
}
#login-button{
    background-color: #F06D3E;
    border: #F06D3E;
}
.panel-heading img {
    max-width: 100px;
    margin: 20px 0;
}
.panel-heading h4 {
    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.1em;
}
.panel-body {
    padding: 15px;
    border: 1px solid rgba(19, 35, 47, 0.9);
}
.panel-body input {
    border-color: rgba(19, 35, 47, 0.9);
    margin: 1em 0;
}
.panel{
    background-color: #fff;
    border-color: #d3e0e9;
}
</style>