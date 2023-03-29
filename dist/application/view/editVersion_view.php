<?php
require_once '../models/Model_Layout.php';

if(isset($_GET['id'])){
	$obj = new Layout();
	$id = $_GET['id'];
	$data = $obj->GetLastVersion($id);
	$major = $data["payload"]["major"];
	$minor = $data["payload"]["minor"];
	$micro = $data["payload"]["micro"];
	$releaseNote = $data["payload"]["releaseNote"];
}
else{
	echo "С таким id нет версий!";
}
?>

<div class="modal-content" id="modal-addVersion">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="black" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Редактирование PLUnity</h1>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Textarea-->
					<div class="add-plunity">
                        <form method="post" id="form-editVersion">
						<div class="item-pl">
							<span for="">major</span>
							<input type="hidden" name="id" value="<? echo $id ?>">
							<input type="text" name="major" value="<? echo $major ?>">
						</div>
						<div class="item-pl">
							<span>minor</span>
							<input type="text" name="minor" value="<? echo $minor ?>">
						</div>
						<div class="item-pl">
							<span>micro</span>
							<input type="text" name="micro" value="<? echo $micro ?>">
						</div>
						<div class="item-pl">
							<span>releaseNote</span>
							<textarea class="form-control form-control-solid" name="releaseNote" rows="5"><? echo $releaseNote ?></textarea>
						</div>
						<div class="item-pl">
							<span>Платформа</span>
							<select class="form-select" name="platform" data-control="select2" data-placeholder="Select an option">
							<?php include_once '../view/listPlatform_view.php' ?>
							</select>
						</div>
						<div class="item-l">
							<div class="form-group row">
								<!--begin::Label-->
								<label class="col-lg-2 col-form-label text-lg-right">Файл:</label>
								<!--end::Label-->

								<!--begin::Col-->
								<div class="col-lg-10">
									<!--begin::Dropzone-->
									<div class="dropzone dropzone-queue mb-2" id="kt_dropzonejs_example_2">
										<!--begin::Controls-->
										<div class="dropzone-panel mb-lg-0 mb-2">
											<a class="dropzone-select btn btn-sm btn-primary me-2">Выберите файл</a>
											<!-- <a class="dropzone-remove-all btn btn-sm btn-light-primary">Удалить все</a> -->
										</div>
										<!--end::Controls-->
										<!--begin::Items-->
										<div class="dropzone-items wm-200px">
											<div class="dropzone-item" style="display:none">
												<!--begin::File-->
												<div class="dropzone-file">
													<div class="dropzone-filename" title="some_image_file_name.jpg">
														<span data-dz-name>some_image_file_name.jpg</span>
														<strong>(<span data-dz-size>340kb</span>)</strong>
													</div>

													<div class="dropzone-error" data-dz-errormessage></div>
												</div>
												<!--end::File-->

												<!--begin::Progress-->
												<div class="dropzone-progress">
													<div class="progress">
														<div class="progress-bar bg-primary" role="progressbar"
															aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
															data-dz-uploadprogress>
														</div>
													</div>
												</div>
												<!--end::Progress-->

												<!--begin::Toolbar-->
												<div class="dropzone-toolbar">
													<span class="dropzone-start"><i
															class="bi bi-play-fill fs-3"></i></span>
													<span class="dropzone-cancel" data-dz-remove
														style="display: none;"><i class="bi bi-x fs-3"></i></span>
                                                    <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
                                                        <path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor"/>
                                                        <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor"/>
                                                    </svg>
                                                    </span>
												</div>
												<!--end::Toolbar-->
											</div>
										</div>
										<!--end::Items-->
									</div>
									<!--end::Dropzone-->
									
								</div>
								<!--end::Modal body-->
							</div>
						</div>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Закрыть</button>
					<button type="button" class="btn btn-primary" onclick="editVersion()">Сохранить</button>
				</div>
                    </form>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>