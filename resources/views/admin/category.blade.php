@extends('layouts.admin')
@section('title', 'Category')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Categories</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="categoryList">
                <div class="card-header border-bottom-dashed">

                    <div class="row g-4 align-items-center">
                        <div class="col-sm">
                            <h5 class="card-title mb-0">Category List</h5>
                        </div>

                        <div class="col-sm-auto">
                            <div class="d-flex flex-wrap gap-2">
                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()">
                                    <i class="ri-delete-bin-2-line"></i>
                                </button>

                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                    id="create-btn" data-bs-target="#showModal">
                                    <i class="ri-add-line me-1"></i> Add Category
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-body border-bottom-dashed border-bottom">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-6">
                                <div class="search-box">
                                    <input type="text" class="form-control search"
                                        placeholder="Search category name...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="row g-3">

                                    <div class="col-sm-6">
                                        <select class="form-control" data-plugin="choices" data-choices
                                            data-choices-search-false id="idStatus">
                                            <option value="">Status</option>
                                            <option value="all">All</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary w-100">
                                            <i class="ri-equalizer-fill me-1"></i> Filters
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- TABLE -->
                <div class="card-body">
                    <div class="table-responsive table-card mb-1">
                        <table class="table align-middle" id="categoryTable">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkAll">
                                        </div>
                                    </th>

                                    <th class="sort" data-sort="category_name">Category</th>
                                    <th class="sort" data-sort="description">Description</th>
                                    <th class="sort" data-sort="status">Status</th>
                                    <th class="sort" data-sort="action">Action</th>
                                </tr>
                            </thead>

                            <tbody class="list form-check-all">

                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child">
                                        </div>
                                    </th>

                                    <td class="category_name">Electronics</td>
                                    <td class="description">Devices & gadgets</td>
                                    <td class="status">
                                        <span class="badge bg-success-subtle text-success">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item" data-bs-toggle="tooltip" title="Remove">
                                                <a class="text-danger remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <div class="noresult" style="display:none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                    colors="primary:#121331,secondary:#08a88a"
                                    style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">No Category Found</h5>
                                <p class="text-muted mb-0">Try adjusting your search or filter.</p>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">Previous</a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">Next</a>
                        </div>
                    </div>
                </div>


                <!-- MODAL ADD / EDIT -->
                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <form class="tablelist-form">
                                <div class="modal-body">

                                    <input type="hidden" id="id-field">

                                    <div class="mb-3">
                                        <label class="form-label">Category Name</label>
                                        <input type="text" id="categoryname-field" class="form-control"
                                            placeholder="Enter category name" required>
                                        <div class="invalid-feedback">Please enter category name.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea id="description-field" class="form-control" rows="3"
                                            placeholder="Description (optional)"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-control" id="status-field" required>
                                            <option value="">Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                        <div class="invalid-feedback">Please select status.</div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>


                <!-- DELETE MODAL -->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                    colors="primary:#f7b84b,secondary:#f06548"
                                    style="width:100px;height:100px"></lord-icon>

                                <h4>Are you sure?</h4>
                                <p class="text-muted">Do you want to delete this category?</p>

                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger" id="delete-record">Yes, Delete!</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
