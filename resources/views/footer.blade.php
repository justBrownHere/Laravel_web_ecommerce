<!-- footer -->
<footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Sản phẩm</h3>
                    <ul class="menu">
                        <li><a href="#">Hỗ trợ</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Hỗ trợ sản phẩm</a></li>
                        
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Dịch vụ</h3>
                    <ul class="menu">
                        <li><a href="#">Hỏi đáp</a></li>
                        <li><a href="#">Thành viên</a></li>
                        <li><a href="#">Quà tặng</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><a href="#">Chính sách giao hàng</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Về chúng tôi</h3>
                    <ul class="menu">
                        <li><a href="#">Câu chuyện</a></li>
                        <li><a href="#">Địa chỉ</a></li>
                        <li><a href="#">Cửa hàng</a></li>
                       
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            ATShop
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                    <div class="subscribe">
                        <input type="email" placeholder="Gửi ý kiến cho chúng tôi">
                        <button>Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- app js -->
    <script src="{{asset('/public/template/js/app.js')}}"></script>
    <script src="{{asset('/public/template/js/index.js')}}"></script>
    <div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AVMq5z7ThiGlP_wu2q7u69pUXf7wqp_T3mcfJGHZCZ7U6pJ8srpaZ3V5jHJOu_iaaAwuXnfSnKwQrye4',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'blue',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button');

</script>
    <script src="{{asset('/public/template/js/public.js')}}"></script>
     
    