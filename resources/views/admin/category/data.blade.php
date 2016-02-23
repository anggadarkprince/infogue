@extends('private')

@section('title', '- Categories')

@section('content')

    <div id="content-wrapper">
        <header>
            <a href="#menu-toggle" class="toggle-nav"><i class="fa fa-bars"></i></a>
            <div class="title">
                <h1>Category</h1>
            </div>
            <div class="control hidden-xs">
                <div class="account clearfix">
                    <div class="avatar-wrapper">
                        <img src="images/contributors/cici.png" class="img-circle img-rounded">
                        <div class="notify"></div>
                    </div>
                    <p class="avatar-greeting pull-left hidden-sm">Hi, <strong>Imelda Agustine</strong></p>
                </div>
                <a href="admin_login.html" class="sign-out"><i class="fa fa-sign-out"></i> SIGN OUT</a>
            </div>
        </header>
        <div class="breadcrumb-wrapper">
            <ol class="breadcrumb mtn">
                <li><a href="index.html">INFOGUE.ID</a></li>
                <li class="hidden-sm hidden-xs"><a href="admin_dashboard.html">Dashboard</a></li>
                <li class="active">Category</li>
            </ol>
            <div class="control">
                <a href="#create" data-toggle="modal" class="link"><i class="fa fa-plus"></i> CATEGORY</a>
                <a href="#create-sub" data-toggle="modal" class="link"><i class="fa fa-plus"></i> SUB</a>
            </div>
        </div>
        <div class="content">
            <div class="title-section">
                <div class="title-wrapper">
                    <h1 class="title">Category</h1>
                    <p class="subtitle">List of article category</p>
                </div>
                <div class="control">
                    <div class="filter">
                        <div class="dropdown select">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                TIMESTAMP
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                <li class="dropdown-header">SORT BY</li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> Timestamp</a></li>
                                <li><a href="#"><i class="fa fa-font"></i> Name</a></li>
                                <li><a href="#"><i class="fa fa-trophy"></i> Popularity</a></li>
                                <li><a href="#"><i class="fa fa-file-text"></i> Article</a></li>
                            </ul>
                        </div>
                        <div class="dropdown select">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                DESCENDING
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                <li class="dropdown-header">METHOD</li>
                                <li><a href="#"><i class="fa fa-arrow-up"></i> Ascending</a></li>
                                <li><a href="#"><i class="fa fa-arrow-down"></i> Descending</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="group-control">
                        <a href="#delete" data-toggle="modal" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> DELETE</a>
                    </div>
                </div>
            </div>
            <div class="content-section">
                <table class="table table-responsive table-striped table-hover table-condensed table-multiple mbs">
                    <thead>
                    <tr>
                        <th width="5%">
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-all" class="css-checkbox">
                                <label for="check-all" class="css-label"></label>
                            </div>
                        </th>
                        <th width="20%">Category</th>
                        <th width="15%">Sub</th>
                        <th width="35%">Article Total</th>
                        <th width="10%" class="text-center">Popularity</th>
                        <th width="15%" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr data-target="#sub1">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-1" class="css-checkbox">
                                <label for="check-1" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">NEWS</a></td>
                        <td>18 SUBS</td>
                        <td>656 Articles</td>
                        <td class="text-center">10%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub1">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-1" id="subcheck-11" class="css-checkbox">
                                        <label for="subcheck-11" class="css-label"></label>
                                    </div>
                                    POLITIC
                                </td>
                                <td>3453 Articles</td>
                                <td colspan="2">Assumenda beatae blanditiis consequatur!...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-12" id="subcheck-12" class="css-checkbox">
                                        <label for="subcheck-12" class="css-label"></label>
                                    </div>
                                    WORLD
                                </td>
                                <td>567 Articles</td>
                                <td colspan="2">Lorem ipsum dolor sit amet, consectetur...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-13" id="subcheck-13" class="css-checkbox">
                                        <label for="subcheck-13" class="css-label"></label>
                                    </div>
                                    ISSUES
                                </td>
                                <td>345 Articles</td>
                                <td colspan="2">consectetur adipisicing elit ipsum dolor sit...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-14" id="subcheck-14" class="css-checkbox">
                                        <label for="subcheck-14" class="css-label"></label>
                                    </div>
                                    HOT
                                </td>
                                <td>2356 Articles</td>
                                <td colspan="2">Eaque eligendi est, fuga incidunt magnam...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub2">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-2" class="css-checkbox">
                                <label for="check-2" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">ECONOMIC</a></td>
                        <td>35 SUBS</td>
                        <td>542 Articles</td>
                        <td class="text-center">5%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub2">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-21" id="subcheck-21" class="css-checkbox">
                                        <label for="subcheck-21" class="css-label"></label>
                                    </div>
                                    BUSINESS
                                </td>
                                <td>765 Articles</td>
                                <td colspan="2">Assumenda beatae blanditiis consequatur!...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-22" id="subcheck-22" class="css-checkbox">
                                        <label for="subcheck-22" class="css-label"></label>
                                    </div>
                                    STOCK
                                </td>
                                <td>457 Articles</td>
                                <td colspan="2">Lorem ipsum dolor sit amet, consectetur...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-23" id="subcheck-23" class="css-checkbox">
                                        <label for="subcheck-23" class="css-label"></label>
                                    </div>
                                    FINANCE
                                </td>
                                <td>672 Articles</td>
                                <td colspan="2">consectetur adipisicing elit ipsum dolor sit...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-24" id="subcheck-24" class="css-checkbox">
                                        <label for="subcheck-24" class="css-label"></label>
                                    </div>
                                    MANAGEMENT
                                </td>
                                <td>4563 Articles</td>
                                <td colspan="2">Eaque eligendi est, fuga incidunt magnam...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub3">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-3" class="css-checkbox">
                                <label for="check-3" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">ENTERTAINMENT</a></td>
                        <td>8 SUBS</td>
                        <td>7843 Articles</td>
                        <td class="text-center">15%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub3">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-31" id="subcheck-31" class="css-checkbox">
                                        <label for="subcheck-31" class="css-label"></label>
                                    </div>
                                    FILM
                                </td>
                                <td>3453 Articles</td>
                                <td colspan="2">Film is discussing about directing, synops...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-32" id="subcheck-32" class="css-checkbox">
                                        <label for="subcheck-32" class="css-label"></label>
                                    </div>
                                    MUSIC
                                </td>
                                <td>856 Articles</td>
                                <td colspan="2">New album, indie, videoclip, all stuff about...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-33" id="subcheck-33" class="css-checkbox">
                                        <label for="subcheck-33" class="css-label"></label>
                                    </div>
                                    GAME
                                </td>
                                <td>6742 Articles</td>
                                <td colspan="2">Walkthrough and cheat, game story and...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-33" id="subcheck-34" class="css-checkbox">
                                        <label for="subcheck-34" class="css-label"></label>
                                    </div>
                                    CELEBRITIES
                                </td>
                                <td>756 Articles</td>
                                <td colspan="2">World selebrities, social life, romantic...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub4">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-4" class="css-checkbox">
                                <label for="check-4" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">SPORT</a></td>
                        <td>12 SUBS</td>
                        <td>885 Articles</td>
                        <td class="text-center">20%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub4">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-41" id="subcheck-41" class="css-checkbox">
                                        <label for="subcheck-41" class="css-label"></label>
                                    </div>
                                    SOCCER
                                </td>
                                <td>4567 Articles</td>
                                <td colspan="2">Assumenda beatae blanditiis consequatur!...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-42" id="subcheck-42" class="css-checkbox">
                                        <label for="subcheck-42" class="css-label"></label>
                                    </div>
                                    BASKET
                                </td>
                                <td>567 Articles</td>
                                <td colspan="2">Lorem ipsum dolor sit amet, consectetur...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-43" id="subcheck-43" class="css-checkbox">
                                        <label for="subcheck-43" class="css-label"></label>
                                    </div>
                                    TENNIS
                                </td>
                                <td>745 Articles</td>
                                <td colspan="2">consectetur adipisicing elit ipsum dolor sit...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-44" id="subcheck-44" class="css-checkbox">
                                        <label for="subcheck-44" class="css-label"></label>
                                    </div>
                                    MOTOGP
                                </td>
                                <td>346 Articles</td>
                                <td colspan="2">Eaque eligendi est, fuga incidunt magnam...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-45" id="subcheck-45" class="css-checkbox">
                                        <label for="subcheck-45" class="css-label"></label>
                                    </div>
                                    FORMULA 1
                                </td>
                                <td>678 Articles</td>
                                <td colspan="2">Eaque eligendi est, fuga incidunt magnam...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-46" id="subcheck-46" class="css-checkbox">
                                        <label for="subcheck-46" class="css-label"></label>
                                    </div>
                                    EXTREME
                                </td>
                                <td>678 Articles</td>
                                <td colspan="2">Praesentium quo saepe voluptas voluptate....</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub5">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-5" class="css-checkbox">
                                <label for="check-5" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">HEALTH</a></td>
                        <td>7 SUBS</td>
                        <td>235 Articles</td>
                        <td class="text-center">5%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub5">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-51" id="subcheck-51" class="css-checkbox">
                                        <label for="subcheck-51" class="css-label"></label>
                                    </div>
                                    DISEASE
                                </td>
                                <td>456 Articles</td>
                                <td colspan="2">Assumenda beatae blanditiis consequatur!...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-52" id="subcheck-52" class="css-checkbox">
                                        <label for="subcheck-52" class="css-label"></label>
                                    </div>
                                    SYMPTOM
                                </td>
                                <td>132 Articles</td>
                                <td colspan="2">Lorem ipsum dolor sit amet, consectetur...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-53" id="subcheck-53" class="css-checkbox">
                                        <label for="subcheck-53" class="css-label"></label>
                                    </div>
                                    DIET
                                </td>
                                <td>324 Articles</td>
                                <td colspan="2">consectetur adipisicing elit ipsum dolor sit...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-54" id="subcheck-54" class="css-checkbox">
                                        <label for="subcheck-54" class="css-label"></label>
                                    </div>
                                    LIFESTYLE
                                </td>
                                <td>734 Articles</td>
                                <td colspan="2">Eaque eligendi est, fuga incidunt magnam...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-55" id="subcheck-55" class="css-checkbox">
                                        <label for="subcheck-55" class="css-label"></label>
                                    </div>
                                    FOOD
                                </td>
                                <td>324 Articles</td>
                                <td colspan="2">Eaque eligendi est, fuga incidunt magnam...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub6">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-6" class="css-checkbox">
                                <label for="check-6" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">SCIENCE</a></td>
                        <td>15 SUBS</td>
                        <td>854 Articles</td>
                        <td class="text-center">10%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub6">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-61" id="subcheck-61" class="css-checkbox">
                                        <label for="subcheck-61" class="css-label"></label>
                                    </div>
                                    RESEARCH
                                </td>
                                <td>331 Articles</td>
                                <td colspan="2">Assumenda beatae blanditiis consequatur!...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-62" id="subcheck-62" class="css-checkbox">
                                        <label for="subcheck-62" class="css-label"></label>
                                    </div>
                                    SPACE
                                </td>
                                <td>967 Articles</td>
                                <td colspan="2">Lorem ipsum dolor sit amet, consectetur...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-63" id="subcheck-63" class="css-checkbox">
                                        <label for="subcheck-63" class="css-label"></label>
                                    </div>
                                    EARTH
                                </td>
                                <td>534 Articles</td>
                                <td colspan="2">consectetur adipisicing elit ipsum dolor sit...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub7">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-7" class="css-checkbox">
                                <label for="check-7" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">TECHNOLOGY</a></td>
                        <td>8 SUBS</td>
                        <td>9632 Articles</td>
                        <td class="text-center">12%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub7">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-71" id="subcheck-71" class="css-checkbox">
                                        <label for="subcheck-71" class="css-label"></label>
                                    </div>
                                    COMPUTER
                                </td>
                                <td>765 Articles</td>
                                <td colspan="2">Assumenda beatae blanditiis consequatur!...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-72" id="subcheck-72" class="css-checkbox">
                                        <label for="subcheck-72" class="css-label"></label>
                                    </div>
                                    INTERNET
                                </td>
                                <td>185 Articles</td>
                                <td colspan="2">Lorem ipsum dolor sit amet, consectetur...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-73" id="subcheck-73" class="css-checkbox">
                                        <label for="subcheck-73" class="css-label"></label>
                                    </div>
                                    SOFTWARE
                                </td>
                                <td>534 Articles</td>
                                <td colspan="2">consectetur adipisicing elit ipsum dolor sit...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-74" id="subcheck-74" class="css-checkbox">
                                        <label for="subcheck-74" class="css-label"></label>
                                    </div>
                                    HARDWARE
                                </td>
                                <td>685 Articles</td>
                                <td colspan="2">Eaque eligendi est, fuga incidunt magnam...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-75" id="subcheck-75" class="css-checkbox">
                                        <label for="subcheck-75" class="css-label"></label>
                                    </div>
                                    SOCMED
                                </td>
                                <td>634 Articles</td>
                                <td colspan="2">Eaque eligendi est, fuga incidunt magnam...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-76" id="subcheck-76" class="css-checkbox">
                                        <label for="subcheck-76" class="css-label"></label>
                                    </div>
                                    MOBILE
                                </td>
                                <td>567 Articles</td>
                                <td colspan="2">Praesentium quo saepe voluptas voluptate....</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub8">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-8" class="css-checkbox">
                                <label for="check-8" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">PHOTO</a></td>
                        <td>12 SUBS</td>
                        <td>743 Articles</td>
                        <td class="text-center">8%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub8">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center">NO SUB CATEGORY AVAILABLE</td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub9">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-9" class="css-checkbox">
                                <label for="check-9" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">VIDEO</a></td>
                        <td>2 SUBS</td>
                        <td>545 Articles</td>
                        <td class="text-center">5%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub9">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center">NO SUB CATEGORY AVAILABLE</td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    <tr data-target="#sub10">
                        <td>
                            <div class="checkbox">
                                <input type="checkbox" name="check-all" id="check-10" class="css-checkbox">
                                <label for="check-10" class="css-label"></label>
                            </div>
                        </td>
                        <td><a href="category.html" target="_blank">OTHERS</a></td>
                        <td>12 SUBS</td>
                        <td>6784 Articles</td>
                        <td class="text-center">10%</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    ACTION
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                    <li class="dropdown-header">CONTROL</li>
                                    <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                    <li><a href="#edit" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#delete" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                        <div class="sub-table">
                            <tbody class="sub-table" id="sub10">
                            <tr class="sub-head">
                                <th width="5%"></th>
                                <th width="20%">SUB CATEGORY</th>
                                <th width="15%">ARTICLES</th>
                                <th class="45%" colspan="2">DESCRIPTION</th>
                                <th width="15%" class="text-center"></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-101" id="subcheck-101" class="css-checkbox">
                                        <label for="subcheck-101" class="css-label"></label>
                                    </div>
                                    MOTIVATION
                                </td>
                                <td>23 Articles</td>
                                <td colspan="2">Assumenda beatae blanditiis consequatur!...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-102" id="subcheck-102" class="css-checkbox">
                                        <label for="subcheck-102" class="css-label"></label>
                                    </div>
                                    FAMILY
                                </td>
                                <td>45 Articles</td>
                                <td colspan="2">Lorem ipsum dolor sit amet, consectetur...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="subcheck-103" id="subcheck-103" class="css-checkbox">
                                        <label for="subcheck-103" class="css-label"></label>
                                    </div>
                                    RELATIONSHIP
                                </td>
                                <td>245 Articles</td>
                                <td colspan="2">consectetur adipisicing elit ipsum dolor sit...</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            ACTION
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-sort-type">
                                            <li class="dropdown-header">CONTROL</li>
                                            <li><a href="category.html" target="_blank"><i class="fa fa-eye"></i> View</a></li>
                                            <li><a href="#edit-sub" data-toggle="modal"><i class="fa fa-pencil"></i> Edit</a></li>
                                            <li><a href="#delete-sub" data-toggle="modal"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </div>
                    </tr>
                    </tbody>
                </table>
                <div class="table-footer">
                    <div class="status">
                        <p class="text-muted">3/120 Rows selected</p>
                        <p>Showing 1 to 10 of 40 entries</p>
                    </div>
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="First">FIRST</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Previous">PREV</a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">NEXT</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Last">LAST</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<div class="modal fade color" id="create" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" class="form-strip form-horizontal">
                <input type="hidden" class="form-control" value="0"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-navicon"></i> CREATE CATEGORY</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="category">CATEGORY</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="category" class="form-control" placeholder="Category name"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="keywords">KEYWORDS</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="keywords" class="form-control" placeholder="Separated by coma" data-role="tagsinput"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="description">DESCRIPTION</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="5" placeholder="Short category description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">DISCARD</a>
                    <button type="submit" class="btn btn-primary">CREATE CATEGORY</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade color" id="create-sub" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" class="form-strip form-horizontal">
                <input type="hidden" class="form-control" value="0"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-navicon"></i> CREATE SUB CATEGORY</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="category-list-edit">CATEGORY</label>
                            </div>
                            <div class="col-sm-9">
                                <label for="category-list" class="css-select">
                                    <select name="category-list" id="category-list" class="form-control" required>
                                        <option value="">Select Category</option>
                                        <option value="1">News</option>
                                        <option value="2">Economic</option>
                                        <option value="5">Entertainment</option>
                                        <option value="4">Sport</option>
                                        <option value="4">Health</option>
                                        <option value="4">Science</option>
                                        <option value="4">Technology</option>
                                        <option value="4">Photo</option>
                                        <option value="4">Video</option>
                                        <option value="4">Others</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="sub-category">SUB CATEGORY</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="sub-category" class="form-control" placeholder="Sub category name"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="label-edit">GROUP LABEL</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="label-edit" class="form-control" placeholder="Label group in menu"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="description-sub">DESCRIPTION</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description-sub" cols="30" rows="5" placeholder="Short sub category description">
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">DISCARD</a>
                    <button type="submit" class="btn btn-primary">CREATE SUB</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade color" id="edit" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" class="form-strip form-horizontal">
                <input type="hidden" class="form-control" value="0"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-navicon"></i> EDIT CATEGORY</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="cateogry-edit">CATEGORY</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="cateogry-edit" class="form-control" placeholder="Category name" value="Entertainment"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="keywords-edit">KEYWORDS</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="keywords-edit" class="form-control" placeholder="Separated by coma" data-role="tagsinput" value="Game, Music, Film"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="description-edit">DESCRIPTION</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description-edit" cols="30" rows="5" placeholder="Short category description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias atque consequatur cupiditate explicabo impedit magnam maxime minus, molestias, neque nihil porro quaerat quam sequi tempora tempore vel veniam voluptas.
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">DISCARD</a>
                    <button type="submit" class="btn btn-primary">UPDATE CATEGORY</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade color" id="edit-sub" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" class="form-strip form-horizontal">
                <input type="hidden" class="form-control" value="0"/>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-navicon"></i> EDIT SUB CATEGORY</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="category-list-edit">CATEGORY</label>
                            </div>
                            <div class="col-sm-9">
                                <label for="category-list-edit" class="css-select">
                                    <select name="category-list-edit" id="category-list-edit" class="form-control" required>
                                        <option value="">Select Category</option>
                                        <option value="1">News</option>
                                        <option value="2">Economic</option>
                                        <option value="5" selected>Entertainment</option>
                                        <option value="4">Sport</option>
                                        <option value="4">Health</option>
                                        <option value="4">Science</option>
                                        <option value="4">Technology</option>
                                        <option value="4">Photo</option>
                                        <option value="4">Video</option>
                                        <option value="4">Others</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="sub-category-edit">SUB CATEGORY</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="sub-category-edit" class="form-control" placeholder="Sub category name" value="Music"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="label-edit">GROUP LABEL</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" id="label-edit" class="form-control" placeholder="Label group in menu" value="Extravaganza"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="description-sub-edit">DESCRIPTION</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description-sub-edit" cols="30" rows="5" placeholder="Short sub category description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias atque consequatur cupiditate explicabo impedit magnam maxime minus, molestias, neque nihil porro quaerat quam sequi tempora tempore vel veniam voluptas.
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">DISCARD</a>
                    <button type="submit" class="btn btn-primary">UPDATE SUB</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade no-line" id="delete" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-trash"></i> DELETE CATEGORY</h4>
                </div>
                <div class="modal-body">
                    <label class="mbn">Are you sure delete this category?</label>
                    <p class="mbn"><small class="text-muted">All related data will be deleted.</small></p>
                    <input type="hidden" class="form-control" value="0"/>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-primary">CANCEL</a>
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade no-line" id="delete-sub" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-trash"></i> DELETE SUB CATEGORY</h4>
                </div>
                <div class="modal-body">
                    <label class="mbn">Are you sure delete this sub category?</label>
                    <p class="mbn"><small class="text-muted">This sub is part of Entertainment category</small></p>
                    <input type="hidden" class="form-control" value="0"/>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-primary">CANCEL</a>
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade no-line" id="search" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-search"></i> SEARCH QUERY</h4>
                </div>
                <div class="modal-body">
                    <label class="mbs">Search in Contributor Data</label>
                    <div class="search">
                        <input type="search" class="form-control pull-left" placeholder="Type keywords here"/>
                        <button type="submit" class="btn btn-primary pull-right">SEARCH</button>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </form>
        </div>
    </div>
</div>