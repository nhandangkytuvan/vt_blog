@extends('layouts.desktop')
@section('title')
	<title>Giới thiệu phòng khám</title>
@endsection('title')
@section('keyword')
	
@endsection('keyword')
@section('css')
	<link rel="canonical" href="{{ url('/') }}" />
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<div class="baner">
		<div class="slick-home">
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/css/desktop/img/slide-1.png') }}" alt="Nam khang - Bảo vệ sức khỏe nam giới" class="center-block">
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 5000,
			});	
		</script>
	</div>
	<div class="menu-benh">
		<div class="container">
			<div class="flex flex1 justify-content-between">
                <div class="flex1col1 flex align-items-center justify-content-center">
                    <a href="{{ url('/') }}" class="text-container-center hvr-fade" title="Danh mục bệnh">
                        <img src="{{ asset('public/css/desktop/img/1.png') }}" alt="">&nbsp;&nbsp;&nbsp;
                        Danh mục bệnh
                    </a>
                </div>
                <div class="flex1col1 flex align-items-center justify-content-center">
                    <a href="{{ APITerm::getUrlByID(28) }}" class="text-container-center hvr-fade" title="Sùi mào gà">Sùi mào gà</a>
                </div>
                <div class="flex1col1 flex align-items-center justify-content-center">
                    <a href="{{ APITerm::getUrlByID(29) }}" class="text-container-center hvr-fade" title="Bệnh lậu">Bệnh lậu</a>
                </div>
                <div class="flex1col1 flex align-items-center justify-content-center">
                    <a href="{{ APITerm::getUrlByID(30) }}" class="text-container-center hvr-fade" title="Giang mai">Giang mai</a>
                </div>
                <div class="flex1col1 flex align-items-center justify-content-center">
                    <a href="{{ APITerm::getUrlByID(31) }}" class="text-container-center hvr-fade" title="Mụn rộp sinh dục">Mụn rộp sinh dục</a>
                </div>
            </div>
		</div>
	</div>
	<main class="home">
		<div class="container">
			<div class="global1 flex align-items-center"><h1 class="text-uppercase">Giới thiệu phòng khám</h1></div>
			<div class="row1 flex flex1 justify-content-between">
				<div class="nth1">
					<img src="{{ asset('public/css/desktop/img/home-1.png') }}" alt="">
				</div>
				<div class="nth2">
					<div class="nth21 text-justify">
						Phòng khám chuyên khoa Nam Khang Hà Nội kế thừa phương châm phát triển lấy kĩ thuật làm kim chỉ nam, lấy nhân tài là nền tảng, hiệu quả điều trị làm gốc rễ, và lấy sự sáng tạo làm nên thương hiệu. Có ưu điểm vượt bậc về chuyên khoa- chuyên bệnh- chuyên trị, dốc sức nghiên cứu và điều trị lâm sàng các bệnh về nam khoa. Gắn liền với các nghiên cứu lý luận và thành quả kĩ thuật mới nhất trên thế giới, đã đạt được những thành tựu vô cùng to lớn trong các lĩnh vực bệnh xã hội, bệnh về tuyến tiền liệt, viêm nhiễm sinh dục, vô sinh nam, chỉnh hình bộ phận sinh dục… <a href="#">[Chi tiết]</a>
					</div>
					<div class="nth22 flex flex2 justify-content-between">
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop/img/home-2.png') }}" alt="">
							<div class="pos-absolute">Đội ngũ y bác sĩ chuyên nghiệp</div>
						</div>
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop/img/home-3.png') }}" alt="">
							<div class="pos-absolute">Đội ngũ y bác sĩ chuyên nghiệp</div>
						</div>
					</div>
				</div>
				<div class="nth3">
					<div class="bg1">
						<div class="title1 text-uppercase text-center">Đơn vị được sở y tế phê chuẩn</div>
						<div class="flex flex1 justify-content-between">
							<div>
								<div class="nth3121">Điều trị nhanh chóng</div>
								<div class="nth3122">Không cần chờ đợi<br>Đăng kí đặt hẹn trực tuyến</div>
							</div>
							<div>
								<div class="nth3121">Yên tâm thăm khám</div>
								<div class="nth3122">Cơ chế bảo mật<br>thông tin hoàn hảo</div>
							</div>
						</div>
						<div class="flex flex1 flex2 justify-content-between">
							<div>
								<div class="nth3121">Thăm khám<br>bất cứ lúc nào</div>
								<div class="nth3122"><span>365 ngày</span><br>không ngày nghỉ</div>
							</div>
							<div>
								<div class="nth3121">Tư vấn<br>bất cứ lúc nào</div>
								<div class="nth3122"><span>24h</span><br>Dịch vụ tư vấn<br>trực tuyến</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row2">
				<div class="global2 flex justify-content-between align-items-center">
					<div class="text-uppercase nth1">Văn hóa nam khang</div>
					<div class="nth2"><a href="#">Tư vấn trực tuyến</a></div>
				</div>
				<div class="flex flex1 justify-content-between align-items-center">
					<div class="nth1">
						<img src="{{ asset('public/css/desktop/img/home-6.png') }}" alt="" class="center-block">
					</div>
					<div class="nth2">
						<table class="width-100">
							<tr>
								<td class="td1 bg1"><div>Phòng khám<br>đào tạo</div></td>
								<td class="td2">
									<div>Chân thành, chi phí hợp lý, sáng tạo, chuyên nghiệp</div>
								</td>
								<td class="td3 bg2">
									<div>Tôn chỉ<br>thành lập</div>
								</td>
								<td class="td4">
									<div>Chuyên chữa bệnh nam khoa, bệnh xã hội</div>
								</td>
							</tr>
							<tr>
								<td class="td1 bg2"><div>Phương châm<br>phát triển</div></td>
								<td class="td2">
									<div>Phòng khám chuyên khoa nhận được sự tôn trọng của người dân</div>
								</td>
								<td class="td3 bg1">
									<div>Phương châm<br>quản lý</div>
								</td>
								<td class="td4">
									<div>Luôn coi con người là gốc, không ngừng nghiên cứu sáng tạo</div>
								</td>
							</tr>
							<tr>
								<td class="td1 bg1"><div>Phương châm<br>dùng người</div></td>
								<td class="td2">
									<div>Kiên quyết không dùng người không có y đức</div>
								</td>
								<td class="td3 bg2">
									<div>Phương châm<br>dịch vụ</div>
								</td>
								<td class="td4">
									<div>Yêu thương, cẩn trọng, nhẫn nại, kiên trì</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row3">
				<div class="global2 flex justify-content-between align-items-center">
					<div class="text-uppercase nth1">Chuyên khoa bệnh xã hội  -  Bác sĩ Nam Khang  -  Kĩ thuật đặc biệt</div>
					<div class="nth2"><a href="#">Tư vấn trực tuyến</a></div>
				</div>
				<div class="flex flex1 justify-content-between">
					<div class="nth">
						<img src="{{ asset('public/css/desktop/img/home-7.png') }}" alt="" class="center-block img-responsive">
						<p class="title1">
							Chuyên bệnh xã hội<br>Hiệu quả điều trị được chứng thực
						</p>
						<p class="des1">
							Phòng khám chuyên khoa Nam Khang Hà Nội là phòng khám chuyên khoa bao gồm bệnh nam khoa và bệnh xã hội, và được chia nhỏ thành 6 khoa lớn như bệnh xã hội, bệnh về tuyến tiền liệt, viêm nhiễm sinh dục, rối loạn chức năng sinh dục, chỉnh hình bộ phận sinh dục, vô sinh nam.
						</p>
					</div>
					<div class="nth">
						<img src="{{ asset('public/css/desktop/img/home-8.png') }}" alt="" class="center-block img-responsive">
						<p class="title1">
							Bác sĩ Nam Khang<br>Hơn 20 năm kinh nghiệm chẩn trị
						</p>
						<p class="des1">
							Phòng khám chuyên khoa Nam Khang hội tụ nhiều bác sĩ nam khoa nổi tiếng, xây dựng được đội ngũ bác sĩ nam khoa chuyên nghiệp, luôn chú trọng điều trị và nghiên cứu các bệnh xã hội, bệnh nam khoa, và có ưu thế đặc biệt trên phương diện điều trị các bệnh nam khoa và bệnh xã hội…
						</p>
					</div>
					<div class="nth">
						<img src="{{ asset('public/css/desktop/img/home-9.png') }}" alt="" class="center-block img-responsive">
						<p class="title1">
							Kĩ thuật xâm lấn tối thiểu<br>Thực hiện hoàn thiện đến từng chi tiết
						</p>
						<p class="des1">
							Kĩ thuật xâm lấn tối thiểu là xu thế phát triển trong điều trị lâm sàng hiện nay, phòng khám từ khi ứng dụng kĩ thuật này đến nay, tất cả các phương diện từ bác sĩ, bác sĩ gây mê, y tá…đều hướng tới hoàn thiện đến từng chi tiết, để đảm bảo an toàn cho việc điều trị.
						</p>
					</div>
				</div>
			</div>
			<div class="row4">
				<div class="global2 flex justify-content-between align-items-center">
					<div class="text-uppercase nth1">Thiết bị kĩ thuật khoa học an toàn, làm nên thương hiệu khám chữa chuyên nghiệp</div>
					<div class="nth2"><a href="#">Tư vấn trực tuyến</a></div>
				</div>
				<div class="des1">
					Những năm gần đây, phòng khám không ngừng đầu tư những thiết bị kĩ thuật chẩn trị trong và ngoài nước, kết hợp với hệ thống hóa thiết bị chẩn trị, cố gắng sử dụng thiết bị kĩ thuật khoa học phối hợp với kĩ thuật chẩn trị khoa học, phục vụ cho đại đa số quần chúng nhân dân, không ngừng nâng cao trình độ khám chữa, đảm bảo hiệu quả điều trị.
				</div>
				<div class="nth3">
					<img src="{{ asset('public/css/desktop/img/home-10.png') }}" alt="" class="center-block">
				</div>
				<div class="flex flex1 flex-wrap-wrap justify-content-between">
					<div class="flex1col1 flex align-items-center justify-content-between">
						<div class="circle flex align-items-center justify-content-center">Sùi mào gà</div>
						<div>
							<div class="heading">Liệu pháp quang động lực IRA</div>
							<div class="body">
								An toàn không đau, không để lại sẹo, không gây nhờn thuốc, không tổn thương đến các tổ chức bình thường, tỉ lệ loại bỏ sùi mào gà cao, chống tái phát hiệu quả.
							</div>
						</div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-between">
						<div class="circle flex align-items-center justify-content-center">Bệnh lậu</div>
						<div>
							<div class="heading">Liệu pháp DHA</div>
							<div class="body">
								Sử dụng kĩ thuật điện tử sinh học tìm nguyên nhân gây bệnh nhanh chóng chính xác, điều trị chính xác toàn diện, đảm bảo hiệu quả điều trị tận gốc bệnh lậu
							</div>
						</div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-between">
						<div class="circle flex align-items-center justify-content-center">Giang mai</div>
						<div>
							<div class="heading">Liệu pháp cân bằng miễn dịch</div>
							<div class="body">
								Thiết bị tiên tiến kiểm tra chính xác, thuốc sinh học nhập khẩu thực hiện cân bằng miễn dịch, dùng thuốc tổng hợp loại bỏ virus bệnh, phòng ngừa tái phát.
							</div>
						</div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-between">
						<div class="circle flex align-items-center justify-content-center">Mụn rộp sinh dục</div>
						<div>
							<div class="heading">Liệu pháp miễn dịch MB</div>
							<div class="body">
								Tiêu diệt virus toàn diện, kích hoạt chức năng miễn dịch tự thân, liệu trình ngắn, không tác dụng phụ, không tổn thương đến bất kì tổ chức bình thường nào.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row5">
				<div class="global2 flex justify-content-between align-items-center">
					<div class="text-uppercase nth1">Chuyên khoa Nam Khang, chuyên bệnh-chuyên trị, chẩn trị cá thể hóa</div>
					<div class="nth2"><a href="#">Tư vấn trực tuyến</a></div>
				</div>
				<div class="flex flex1 flex-wrap-wrap justify-content-between">
					<div class="flex1col1 flex align-items-center justify-content-between">
						<div class="circle1 flex align-items-center justify-content-center">kiểm tra</div>
						<div>
							<div class="heading1">Kiểm tra hợp lý, đảm bảo hiệu quả</div>
							<div class="body">
								Phòng ngừa là gốc rễ, kiểm tra là tiền đề, điều trị là chìa khóa. Đối với bất kì căn bệnh nào, kiểm tra chính xác là chìa khóa vô cùng quan trọng, vì chẩn đoán chính xác mới có thể điều trị đúng bệnh. Kiểm tra hợp lý có thể giúp cho việc điều trị đúng, giúp cho việc điều trị khoa học càng có cơ sở hơn, hiệu quả càng rõ rệt.
							</div>
						</div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-between">
						<div class="circle2 flex align-items-center justify-content-center">Chẩn đoán</div>
						<div>
							<div class="heading2">Chẩn đoán toàn diện, nâng cao hiệu quả</div>
							<div class="body">
								Sau khi bác sĩ căn cứ vào kết quả kiểm tra tiến hành chẩn đoán toàn diện, mới có thể cung cấp tiền đề đảm bảo cho việc điều trị đúng bệnh ở bước tiếp theo, cung cấp tiền đề chẩn đoán khoa học hóa cho hiệu quả điều trị cuối cùng. Do đó chẩn đoán chính xác bất kì căn bệnh nào là chìa khóa vô cùng quan trọng đối với hiệu quả do điều trị mang lại ở các bước tiếp theo.
							</div>
						</div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-between">
						<div class="circle3 flex align-items-center justify-content-center">Điều trị</div>
						<div>
							<div class="heading3">Điều trị đúng bệnh  Hiệu quả rõ rệt</div>
							<div class="body">
								Điều trị quy chuẩn đúng bệnh là chìa khóa thoát khỏi bệnh tật! Phòng khám chuyên khoa Nam Khang Hà Nội căn cứ vào nguyên nhân gây bệnh, triệu chứng, mức độ nghiêm trọng của bệnh, tiền sử bệnh… của từng bệnh nhân để đưa ra phương án điều trị. “Chuyên bệnh- chuyên khoa- chuyên trị”, giúp cho việc điều trị càng chính xác hơn.
							</div>
						</div>
					</div>
					<div class="flex1col1 flex align-items-center justify-content-between">
						<div class="circle4 flex align-items-center justify-content-center">Hồi phục</div>
						<div>
							<div class="heading4">Chỉ đạo sau khi khỏi, củng cố hiệu quả</div>
							<div class="body">
								Phòng khám chuyên khoa Nam Khang Hà Nội trên cơ sở đảm bảo điều trị đúng bệnh, hiệu quả, còn đặc biệt chỉ dẫn cho bệnh nhân chế độ ăn uống, thói quen sinh hoạt lành mạnh cho bệnh nhân sau điều trị, và thông qua hình thức chăm sóc hỏi thăm định kì để theo dõi tình trạng sức khỏe của bệnh nhân sau hồi phục, đảm bảo hiệu quả điều trị toàn diện.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row6">
				<div class="global2 flex justify-content-between align-items-center">
					<div class="text-uppercase nth1">Dịch vụ tận tâm, hưởng chế độ khám bệnh cao cấp 5 sao</div>
					<div class="nth2"><a href="#">Tư vấn trực tuyến</a></div>
				</div>
				<div class="flex1 flex justify-content-between">
					<div class="flex1col1">
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop/img/home-15.png') }}" alt="" class="center-block img-responsive">
							<span class="pos-absolute text-center">Bệnh nhân<br>là trên hết</span>
						</div>
						<div class="des1">
							Luôn coi bệnh nhân là trên hết. Trang bị phòng khám riêng, tôn trọng sự quyền riêng tư của bệnh nhân, tất cả đều coi bệnh nhân là trung tâm.
						</div>
					</div>
					<div class="flex1col1">
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop/img/home-16.png') }}" alt="" class="center-block img-responsive">
							<span class="pos-absolute text-center">Chất lượng<br>hàng đầu</span>
						</div>
						<div class="des1">
							Nắm vững chất lượng dịch vụ. Đơn giản hóa quy trình thăm khám, định kì triển khai đào tạo dịch vụ y tá hộ lý và thực hiện tọa đàm, kiểm tra, tự kiểm tra, quy chuẩn y tế các khoa.
						</div>
					</div>
					<div class="flex1col1">
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop/img/home-17.png') }}" alt="" class="center-block img-responsive">
							<span class="pos-absolute text-center">Khám bệnh<br>ngoài giờ</span>
						</div>
						<div class="des1">
							Thực hiện khám bệnh ngoài giờ. Xây dựng phòng khám cả năm không ngày nghỉ; thành lập cổng tư vấn, tăng cường lưu động y tá, trợ lý bác sĩ, thực hiện dịch vụ hướng dẫn thăm khám toàn diện.
						</div>
					</div>
					<div class="flex1col1">
						<div class="pos-relative">
							<img src="{{ asset('public/css/desktop/img/home-18.png') }}" alt="" class="center-block img-responsive">
							<span class="pos-absolute text-center">Chất lượng<br>hàng đầu</span>
						</div>
						<div class="des1">
							Đề cao dịch vụ nhân văn. Đề xướng phương châm dịch vụ “một bệnh nhân, một bác sĩ, một y tá”, xây dựng đường dây nóng bác sĩ tư vấn 24h.
						</div>
					</div>
				</div>
			</div>
			<div class="row7">
				<div class="global2 flex justify-content-between align-items-center">
					<div class="text-uppercase nth1">Phòng khám chuyên khoa thương hiệu nhiều năm, môi trường cao cấp thoải mái</div>
					<div class="nth2"><a href="#">Tư vấn trực tuyến</a></div>
				</div>
				<div>
					<img src="{{ asset('public/css/desktop/img/home-20.png') }}" alt="" class="center-block img-responsive">
				</div>
			</div>
			<div class="row8">
				<div class="global2 flex justify-content-between align-items-center">
					<div class="text-uppercase nth1">Quy trình thăm khám, nhanh chóng thuận tiện hơn</div>
					<div class="nth2"><a href="#">Tư vấn trực tuyến</a></div>
				</div>
				<div class="nth2">
					<img src="{{ asset('public/css/desktop/img/home-21.png') }}" alt="" class="center-block img-responsive">
				</div>
				<div class="nth3">
					<div class="text-center heading text-uppercase">Tình trạng hiện tại của bạn là?</div>
					<div class="flex flex1 flex-wrap-wrap justify-content-between">
						<div class="flex1col1 flex align-items-center justify-content-between">
							<div class="circle flex align-items-center justify-content-center">1</div>
							<div>Triệu chứng xuất hiện, cần giúp đỡ</div>
						</div>
						<div class="flex1col1 flex align-items-center justify-content-between">
							<div class="circle flex align-items-center justify-content-center">2</div>
							<div>Vừa mới khám, vẫn chưa điều trị</div>
						</div>
						<div class="flex1col1 flex align-items-center justify-content-between">
							<div class="circle flex align-items-center justify-content-center">3</div>
							<div>Đã khám, chuẩn bị điều trị</div>
						</div>
						<div class="flex1col1 flex align-items-center justify-content-between">
							<div class="circle flex align-items-center justify-content-center">4</div>
							<div>Đã điều trị, hiệu quả không tốt</div>
						</div>
						<div class="flex1col1 flex align-items-center justify-content-between">
							<div class="circle flex align-items-center justify-content-center">5</div>
							<div>Sau điều trị, bị tái phát nhiều lần</div>
						</div>
						<div class="flex1col1 flex align-items-center justify-content-between">
							<div class="circle flex align-items-center justify-content-center">6</div>
							<div>Nhiều vấn đề, cần tư vấn</div>
						</div>
					</div>
					<div class="nth4">
						<a class="dis-table" href="#">
							<div class="table-cell cell1">></div>
							<div class="table-cell cell2">
								Nếu như bạn có các vấn đề về bệnh, bạn hãy sử dụng dịch vụ tư vấn trực tuyến!
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="row9">
				<div class="nth1 text-center text-uppercase"><span>Phòng khám nào ở Hà Nội chữa bệnh xã hội tốt?</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>Vấn đề được quan tâm nhiều nhất</span></div>
				<div class="dis-table table1 width-100">
					<a href="#" class="table-cell cell1">Phòng khám nào ở Hà Nội uy tín?</a>
					<a href="#" class="table-cell cell2">Xếp hạng phòng khám chữa bệnh xã hội ở Hà Nội</a>
					<a href="#" class="table-cell cell3">Phòng khám chữa sùi mào gà tốt nhất Hà Nội</a>
				</div>
				<div class="dis-table table2 width-100">
					<a href="#" class="table-cell cell1">Làm thế nào lựa chọn phòng khám chính quy?</a>
					<a href="#" class="table-cell cell2">Kĩ thuật điều trị của phòng khám nào tốt ở Hà Nội?</a>
					<a href="#" class="table-cell cell3">Điện thoại tư vấn Phòng khám Nam Khang</a>
				</div>
				<div class="dis-table table3 width-100">
					<a href="#" class="table-cell cell1">Phòng khám chuyên khoa Nam Khang có tốt không?</a>
					<a href="#" class="table-cell cell2">Phòng khám chữa bệnh xã hội nào tốt nhất Hà Nội?</a>
					<a href="#" class="table-cell cell3">Địa chỉ Phòng khám Nam Khang ở đâu?</a>
				</div>
				<div class="nth4">
					<a class="dis-table" href="#">
						<div class="table-cell cell1">></div>
						<div class="table-cell cell2">
							Tư vấn trực tuyến nhiều vấn đề hơn nữa
						</div>
					</a>
				</div>
			</div>
		</div>
    </main>
@endsection
