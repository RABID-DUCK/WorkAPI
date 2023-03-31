<?php
require_once '../models/Model_Layout.php';

$id = $_GET['searchId'];
$obj = new Layout();
$search = $obj->GetLastVersion($id);

if($search["payload"] === false){
	echo "С таким id данных нет!";
}
else{
	echo '<tr><td class="id-version">'.$id.'</td>
	<td>
		<div class="d-flex align-items-center">
			<div class="d-flex justify-content-start flex-column">
				<a href="#"
					class="text-dark fw-bolder text-hover-primary fs-6">'.$search['payload']['major'].'.
					'.$search['payload']['minor'].'.'.$search['payload']['micro'].'</a>
			</div>
		</div>
	</td>
	<td>
		<a href="#"
			class="text-dark fw-bolder text-hover-primary d-block fs-6">'.$search['payload']['releaseNote'].'</a>
	</td>
	<td>
		<div class="d-flex justify-content-end flex-shrink-0">
			
			<a href="#" id="edit_version"
				class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
				data-bs-toggle="modal"
				data-bs-target="#kt_modal_invite_friends">
				<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
				<span class="svg-icon svg-icon-3">
					<svg xmlns="http://www.w3.org/2000/svg"
						width="24" height="24" viewBox="0 0 24 24"
						fill="none">
						<path opacity="0.3"
							d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
							fill="black" />
						<path
							d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
							fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</a>
			<a href="#"
			class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
			<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
			<span class="svg-icon svg-icon-3">
			<i class="bi bi-trash"></i>
			</span>
			<!--end::Svg Icon-->
		</a>
			<a href="#" id="download_file"
				class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
				<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
				<span class="svg-icon svg-icon-muted svg-icon-2hx">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
					<path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor"/>
					<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor"/>
				</svg>
				</span>
				<!--end::Svg Icon-->
			</a>
		</div>
	</td></tr>';
}


