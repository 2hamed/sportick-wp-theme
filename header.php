<!DOCTYPE html>
<html lang="fa">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Sportick</title>

	<!-- Bootstrap -->
	<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/bootstrap-flat.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<header>
	<div class="header no-login">
		<div class="content-width">
			<div class="row">
				<div class="col-xs-4 ads">
					<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/man.png" alt="Sportick">
				</div>
				<div class="col-xs-5 search">
					<img class="img-responsive center-block logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Sportick">

					<form class="form-inline alireaza" id="searchForm">
						<button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
						<div class="form-group input-group">
							<input name="search" class="form-control" placeholder="جستجو گروه ها عناوین و..."
								   type="text">
                                    <span class="input-group-addon">
                                        <span class="btn btn-group-xs btn-primary tag-province hide"
											  style="width: auto; padding-top: 3px"><i class="fa fa-times"></i> <span
												class="name"></span></span>
                                        <button class="btn btn-primary" type="button" id="searchOptions">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                    </span>
						</div>
						<div id="searchResult"></div>
						<div id="searchOptions-box">
							<div class="row" id="searchProvince">
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="1">
									<span class="btn btn-xs btn-primary btn-block">آذربايجان شرقى</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="2">
									<span class="btn btn-xs btn-primary btn-block">آذربايجان غربى</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="3">
									<span class="btn btn-xs btn-primary btn-block">اردبيل</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="4">
									<span class="btn btn-xs btn-primary btn-block">اصفهان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="5">
									<span class="btn btn-xs btn-primary btn-block">البرز</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="6">
									<span class="btn btn-xs btn-primary btn-block">ايلام</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="7">
									<span class="btn btn-xs btn-primary btn-block">بوشهر</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="8">
									<span class="btn btn-xs btn-primary btn-block">تهران</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="9">
									<span class="btn btn-xs btn-primary btn-block">چهارمحال و بختيارى</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="10">
									<span class="btn btn-xs btn-primary btn-block">خراسان جنوبى</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="11">
									<span class="btn btn-xs btn-primary btn-block">خراسان رضوى</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="12">
									<span class="btn btn-xs btn-primary btn-block">خراسان شمالى</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="13">
									<span class="btn btn-xs btn-primary btn-block">خوزستان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="14">
									<span class="btn btn-xs btn-primary btn-block">زنجان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="15">
									<span class="btn btn-xs btn-primary btn-block">سمنان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="16">
									<span class="btn btn-xs btn-primary btn-block">سيستان و بلوچستان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="17">
									<span class="btn btn-xs btn-primary btn-block">فارس</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="18">
									<span class="btn btn-xs btn-primary btn-block">قزوين</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="19">
									<span class="btn btn-xs btn-primary btn-block">قم</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="20">
									<span class="btn btn-xs btn-primary btn-block">کردستان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="21">
									<span class="btn btn-xs btn-primary btn-block">کرمان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="22">
									<span class="btn btn-xs btn-primary btn-block">کرمانشاه</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="23">
									<span class="btn btn-xs btn-primary btn-block">کهکيلويه و بويراحمد</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="24">
									<span class="btn btn-xs btn-primary btn-block">گلستان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="25">
									<span class="btn btn-xs btn-primary btn-block">گيلان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="26">
									<span class="btn btn-xs btn-primary btn-block">لرستان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="27">
									<span class="btn btn-xs btn-primary btn-block">مازندران</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="28">
									<span class="btn btn-xs btn-primary btn-block">مرکزى</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="29">
									<span class="btn btn-xs btn-primary btn-block">هرمزگان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="30">
									<span class="btn btn-xs btn-primary btn-block">همدان</span>
								</div>
								<div class="col-xs-3" style="margin-bottom: 8px" data-province="31">
									<span class="btn btn-xs btn-primary btn-block">يزد</span>
								</div>
							</div>
							<input name="province" value="" type="hidden">
						</div>
					</form>
				</div>
				<div class="col-xs-3 formsHeader">
					<form role="form" method="POST" action="http://127.0.0.1/register" id="registerFormHeader">
						<div class="user-info">
							<div class="form-group form-group-sm">
								<input class="form-control" name="email" placeholder="ایمیل خود را وارد کنید."
									   type="email">
							</div>
							<div class="form-group form-group-sm">
								<input class="form-control" name="tel" placeholder="شماره تلفن" type="tel">
							</div>
							<div class="form-group form-group-sm">
								<input class="form-control" name="name" placeholder="نام و نام خانوادگی" type="text">
							</div>
							<div class="form-group form-group-sm address">
								<div class="row">
									<div class="col-xs-6">
										<select class="form-control" name="province">
											<option value="">استان شما</option>
											<option value="1">آذربايجان شرقى</option>
											<option value="2">آذربايجان غربى</option>
											<option value="3">اردبيل</option>
											<option value="4">اصفهان</option>
											<option value="5">البرز</option>
											<option value="6">ايلام</option>
											<option value="7">بوشهر</option>
											<option value="8">تهران</option>
											<option value="9">چهارمحال و بختيارى</option>
											<option value="10">خراسان جنوبى</option>
											<option value="11">خراسان رضوى</option>
											<option value="12">خراسان شمالى</option>
											<option value="13">خوزستان</option>
											<option value="14">زنجان</option>
											<option value="15">سمنان</option>
											<option value="16">سيستان و بلوچستان</option>
											<option value="17">فارس</option>
											<option value="18">قزوين</option>
											<option value="19">قم</option>
											<option value="20">کردستان</option>
											<option value="21">کرمان</option>
											<option value="22">کرمانشاه</option>
											<option value="23">کهکيلويه و بويراحمد</option>
											<option value="24">گلستان</option>
											<option value="25">گيلان</option>
											<option value="26">لرستان</option>
											<option value="27">مازندران</option>
											<option value="28">مرکزى</option>
											<option value="29">هرمزگان</option>
											<option value="30">همدان</option>
											<option value="31">يزد</option>
										</select>
									</div>
									<div class="col-xs-6">
										<select class="form-control" name="city">
											<option value="">شهر شما</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group form-group-sm">
								<div class="input-append input-group"><input class="form-control" name="password"
																			 placeholder="رمز عبور"
																			 data-toggle="password"
																			 type="password"><input
										style="display: none;" placeholder="رمز عبور" class="form-control"
										type="text"><span style="cursor: pointer;" tabindex="100"
														  title="Click here to show/hide password"
														  class="add-on input-group-addon"><i
											class="icon-eye-open fa fa-eye"></i></span></div>
							</div>

							<button type="submit" class="btn btn-success btn-sm">
								<i class="fa fa-user"></i>
								عضویت
							</button>
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
									data-target="#loginModal">
								<i class="fa fa-unlock-alt"></i>
								ورود
							</button>
						</div>
						<div class="tel-code hide">
							<div class="form-group form-group-sm">
								<input class="form-control" name="code" placeholder="کد فعال سازی را وارد نمایید."
									   type="text">
							</div>

							<button type="submit" class="btn btn-success btn-sm">
								<i class="fa fa-key"></i>
								ارسال
							</button>
						</div>
					</form>
					<!-- Modal -->
					<div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
						 aria-labelledby="registerModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header" style="background-color: #00557A; position: relative">
									<img src="/images/logo.png" class="img-responsive center-block logo">
                                            <span
												style="width: 50px; height: 50px; border-radius: 50%; position: absolute; margin-top: -10px; background-color: rgb(0, 178, 125); margin-right: 15px; text-align: center">
                                                <i class="fa fa-lock fa-3x"></i>
                                            </span>
								</div>

								<div class="modal-body">
									<form role="form" method="POST" action="http://127.0.0.1/register"
										  id="registerFormHeader">
										<div class="user-info">
											<div class="form-group form-group-sm">
												<input class="form-control" name="email"
													   placeholder="ایمیل خود را وارد کنید." type="email">
											</div>
											<div class="form-group form-group-sm">
												<input class="form-control" name="tel" placeholder="شماره تلفن"
													   type="tel">
											</div>
											<div class="form-group form-group-sm">
												<input class="form-control" name="name" placeholder="نام و نام خانوادگی"
													   type="text">
											</div>
											<div class="form-group form-group-sm address">
												<div class="row">
													<div class="col-xs-6">
														<select class="form-control" name="province">
															<option value="">استان شما</option>
															<option value="1">آذربايجان شرقى</option>
															<option value="2">آذربايجان غربى</option>
															<option value="3">اردبيل</option>
															<option value="4">اصفهان</option>
															<option value="5">البرز</option>
															<option value="6">ايلام</option>
															<option value="7">بوشهر</option>
															<option value="8">تهران</option>
															<option value="9">چهارمحال و بختيارى</option>
															<option value="10">خراسان جنوبى</option>
															<option value="11">خراسان رضوى</option>
															<option value="12">خراسان شمالى</option>
															<option value="13">خوزستان</option>
															<option value="14">زنجان</option>
															<option value="15">سمنان</option>
															<option value="16">سيستان و بلوچستان</option>
															<option value="17">فارس</option>
															<option value="18">قزوين</option>
															<option value="19">قم</option>
															<option value="20">کردستان</option>
															<option value="21">کرمان</option>
															<option value="22">کرمانشاه</option>
															<option value="23">کهکيلويه و بويراحمد</option>
															<option value="24">گلستان</option>
															<option value="25">گيلان</option>
															<option value="26">لرستان</option>
															<option value="27">مازندران</option>
															<option value="28">مرکزى</option>
															<option value="29">هرمزگان</option>
															<option value="30">همدان</option>
															<option value="31">يزد</option>
														</select>
													</div>
													<div class="col-xs-6">
														<select class="form-control" name="city">
															<option value="">شهر شما</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group form-group-sm">
												<div class="input-append input-group"><input class="form-control"
																							 name="password"
																							 placeholder="رمز عبور"
																							 data-toggle="password"
																							 type="password"><input
														style="display: none;" placeholder="رمز عبور"
														class="form-control" type="text"><span style="cursor: pointer;"
																							   tabindex="100"
																							   title="Click here to show/hide password"
																							   class="add-on input-group-addon"><i
															class="icon-eye-open fa fa-eye"></i></span></div>
											</div>

											<button type="submit" class="btn btn-success btn-sm">
												<i class="fa fa-user"></i>
												عضویت
											</button>
											<button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
													data-target="#loginModal">
												<i class="fa fa-unlock-alt"></i>
												ورود
											</button>
										</div>
										<div class="tel-code hide">
											<div class="form-group form-group-sm">
												<input class="form-control" name="code"
													   placeholder="کد فعال سازی را وارد نمایید." type="text">
											</div>

											<button type="submit" class="btn btn-success btn-sm">
												<i class="fa fa-key"></i>
												ارسال
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
						 aria-labelledby="loginModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header" style="background-color: #00557A; position: relative">
									<img src="/images/logo.png" class="img-responsive center-block logo">
                                            <span
												style="width: 50px; height: 50px; border-radius: 50%; position: absolute; margin-top: -10px; background-color: rgb(0, 178, 125); margin-right: 15px; text-align: center">
                                                <i class="fa fa-lock fa-3x"></i>
                                            </span>
								</div>
								<div class="modal-body">
									<p style="padding-top: 50px; padding-bottom: 30px" class="text-center">با ورود به
										شبکه اجتماعی اسپورتیک از امکانات ویژه سایت برخوردار شوید.</p>

									<form role="form" method="POST" action="http://127.0.0.1/login"
										  id="loginFormHeader">
										<div class="form-group input-group-sm has-feedback">
											<div class="row">
												<div class="col-xs-6">
													<input class="form-control" name="email" placeholder="ایمیل"
														   type="email">
													<i class="form-control-feedback fa fa-envelope"
													   style="top: 10px; left: 15px;"></i>
												</div>
												<div class="col-xs-6">
													<input class="form-control" name="password" placeholder="رمز عبور"
														   type="password">
													<i class="form-control-feedback fa fa-lock"
													   style="top: 10px; left: 15px;"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-xs-3">
													<div class="checkbox">
														<label>
															<input name="remember" type="checkbox">
															<span>مرا به خاطر بسپار</span>
														</label>
													</div>
												</div>
												<div class="col-xs-6">
													<button type="submit" class="btn btn-success btn-block btn-sm">
														ورود به سایت
													</button>
												</div>
												<div class="col-xs-3">
													<a href="#" data-toggle="modal" data-target="#sendCodeModal"
													   data-dismiss="modal">رمز عبور را فراموش کرده ام</a>
												</div>
											</div>
										</div>
									</form>

									<p style="padding-top: 30px; padding-bottom: 30px" class="text-center">وارد شدن شما
										بوسیله نام کاربری به معنای پذیرش کامل قوانین و مقررات سایت است.</p>

									<p class="text-center">
										<a href="#"
										   onclick="$('#loginModal').modal('hide'); $('#registerModal').modal('show')">
											می خواهم عضو سایت شوم.
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" id="sendCodeModal" tabindex="-1" role="dialog"
						 aria-labelledby="sendCodeModalLabel">
						<div class="modal-dialog modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<form role="form" method="POST" action="http://127.0.0.1/sendCode"
										  id="sendCodeFormHeader">
										<input name="_token" value="PEAuReXZzYDKRGIEjb5WRecvHsxBMIUvdS0X2Vkt"
											   type="hidden">

										<div class="get-tel show">
											<div class="form-group input-group-sm">
												<input class="form-control" name="tel" placeholder="شماره تلفن"
													   type="tel">
												<span class="help-block">شماره تلفن خود را وارد نمایید تا کد تغییر رمز برای شما ارسال شود.</span>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-xs-6">
														<button type="submit" class="btn btn-warning btn-block btn-sm">
															ارسال کد
														</button>
													</div>
													<div class="col-xs-6">
														<button type="button" class="btn btn-success btn-block btn-sm"
																data-toggle="modal" data-target="#loginModal"
																data-dismiss="modal">
															ورود
														</button>
													</div>
												</div>
											</div>
										</div>

										<div class="get-code hide">
											<div class="form-group input-group-sm">
												<input class="form-control" name="code" placeholder="کد" type="text">
												<span class="help-block">کد تغییر رمز را وارد نمایید.</span>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-xs-6 col-xs-offset-3">
														<button type="submit" class="btn btn-warning btn-block btn-sm">
															بررسی کد
														</button>
													</div>
												</div>
											</div>
										</div>

										<div class="get-password hide">
											<div class="form-group input-group-sm">
												<input class="form-control" name="password" placeholder="رمز جدید"
													   type="password">
											</div>
											<div class="form-group input-group-sm">
												<input class="form-control" name="password_confirmation"
													   placeholder="تکرار رمز جدید" type="password">
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-xs-6 col-xs-offset-3">
														<button type="submit" class="btn btn-success btn-block btn-sm">
															تغییر رمز
														</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</header>