@extends('admin.default.default')

@section('title')
标签列表
@endsection
@section('content')
<div class="row">
				
				<div class="span10 listing-buttons">
				
					<button class="btn btn-info">Action</button>
				
					<button class="btn btn-success">Action</button>
				
					<a href="/tag/create"><button class="btn btn-primary">添加标签</button></a>
				
				</div>
				
				<div class="span10">
				
					<div class="slate">
					
						<div class="page-header">
							<div class="btn-group pull-right">
								
									
										
										<form class="form-inline" action="/article" method="get">
											<input type="text" class="input-large" placeholder="Keyword..." value="{{request()->keywords}}" name="keywords">
											<button class="btn btn-primary">搜索</button>
										</form>
									
									


								<ul class="dropdown-menu">
									<li><a href="">CSV</a></li>
									<li><a href="">Excel</a></li>
									<li><a href="">PDF</a></li>
								</ul>
							</div>
							<h2>标签列表</h2>
						</div>
					
						<table class="orders-table table">
						
									<thead>
                            <tr>
                                <th class="table-check">
                                    <input type="checkbox" class="tpl-table-fz-check">
                                </th>
                                <th class="table-id">ID</th>
                                <th class="table-title">标签名</th>
                                <th class="table-set">操作</th>
                            </tr>
                        </thead>
						   <tbody>
                            @foreach($tag as $v)
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>{{$v->id}}</td>
                                <td class="am-hide-sm-only">{{$v->name}}</td>
                                <td>
                                    <div class="am-btn-toolbar" >
									
									
 									
                                   <a href="/tag/{{$v->id}}/edit"><button style="float:left" class="btn btn-small btn-success" href="form.html">编辑</button></a>
									
										
                                    <form action="/tag/{{$v->id}}" method="post">
                                    {{csrf_field()}}
 									{{method_field('DELETE')}}	
                                   	 <button class="btn btn-small btn-warning" >删除</button>
									</form>

                                    </div>
                                   
                                </td>
                               
                            	
								
                            </tr>
                            @endforeach
                        </tbody>
						</table>
							
					</div>
				
				</div>
				
				<div class="modal hide fade" id="removeItem">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h3>Remove Item</h3>
					</div>
					<div class="modal-body">
						<p>Are you sure you would like to remove this item?</p>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal">Close</a>
						<a href="#" class="btn btn-danger">Remove</a>
					</div>
				</div>
			
				<div class="span5">
				
					
				</div>
				<!-- 
				<div class="span5 listing-buttons pull-right">
				
					<button class="btn btn-info">Action</button>
				
					<button class="btn btn-success">Action</button>
				
					<button class="btn btn-primary">Add New Item</button>
				
				</div> -->
				
			</div>
@endsection