@php use Illuminate\Support\Facades\Cookie; @endphp
<!-- Login -->
<style>
/* Đặt tên lớp và ID độc quyền cho container này */
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

.wrapper-container {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	font-family: 'Montserrat', sans-serif;
	margin: 0;
    height: 70vh;
}

.wrapper-container {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: fixed; /* Thay đổi từ relative sang fixed */
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%); /* Căn giữa theo chiều dọc và ngang */
	z-index: 9999; /* Đảm bảo nổi lên phía trên */
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.wrapper-container .form-section h1 {
	font-weight: bold;
	margin: 0;
	font-size: 30px;
    
}
.wrapper-container .transition-overlay-container h1{
    font-weight: bold;
}

.wrapper-container .transition-overlay p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
	color: #fefefe;
}

.wrapper-container span {
	font-size: 12px;
}

.wrapper-container a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
    display: block;

}

.wrapper-container button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.wrapper-container button:active {
	transform: scale(0.95);
}

.wrapper-container button:focus {
	outline: none;
}

.wrapper-container .toggle-button {
	background-color: transparent;
	border-color: #FFFFFF;
}

.wrapper-container .form-section {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

.wrapper-container input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
	border-radius: 5px;
}

/* Phong cách riêng cho các phần chuyển đổi */
.wrapper-container .form-section {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.wrapper-container .sign-in-section {
	left: 0;
	width: 50%;
	z-index: 2;
}

.wrapper-container.active .sign-in-section {
	transform: translateX(100%);
}

.wrapper-container .sign-up-section {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.wrapper-container.active .sign-up-section {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

/* Phong cách overlay chuyển đổi */
.wrapper-container .transition-overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.wrapper-container.active .transition-overlay-container {
	transform: translateX(-100%);
}

.wrapper-container .transition-overlay {
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.wrapper-container.active .transition-overlay {
	transform: translateX(50%);
}

.wrapper-container .overlay-section {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.wrapper-container .overlay-left {
	transform: translateX(-20%);
}

.wrapper-container.active .overlay-left {
	transform: translateX(0);
}

.wrapper-container .overlay-right {
	right: 0;
	transform: translateX(0);
}

.wrapper-container.active .overlay-right {
	transform: translateX(20%);
}

.wrapper-container .social-media-container {
	margin: 20px 0;
}

.wrapper-container .social-icon {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
	color: #333;
	font-size: 18px;
	transition: color 0.3s, border-color 0.3s;
}

.wrapper-container .social-icon:hover {
	color: #FF4B2B;
	border-color: #FF4B2B;
}

.form-check .form-check-box { 
    width: 10px;
    height: 10px;
    margin-top: 0.2em;
}
.form-section .form-check {
    padding-left: 0em;
    font-size: 16px;
}

@media (max-width: 768px) {
    .modal-dialog {
        width: 90%; /* Chiếm 90% chiều rộng màn hình */
    }

    .modal-header, .modal-footer {
        text-align: center; /* Căn giữa nội dung trong modal */
    }

    .form-control {
        font-size: 14px; /* Giảm kích thước chữ trong ô nhập liệu */
        padding: 10px; /* Thêm padding cho các ô nhập liệu */
    }
    .wrapper-container .social-media-container {
    margin: 20px -10px;
    }
    .wrapper-container span {
        font-size: 12px;
        display: none;
    }
    .form-check {
        padding-left: 0.5em;
        font-size: 14px
    }
}

</style>

<script>
const signUpToggle = document.getElementById('signUpToggle');
const signInToggle = document.getElementById('signInToggle');
const wrapperContainer = document.getElementById('wrapperContainer');

signUpToggle.addEventListener('click', () => {
	wrapperContainer.classList.add("active");
});

signInToggle.addEventListener('click', () => {
	wrapperContainer.classList.remove("active");
});
</script>
