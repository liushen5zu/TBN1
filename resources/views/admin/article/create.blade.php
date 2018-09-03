@extends('admin.default.default')

@section('title')

添加文章

@endsection

@section('content')
<div class="slate">
								
	<div class="page-header">
		<h2>用户添加</h2>
	</div>
	   <div class="tpl-block">
        	<div class="am-g">
            	<div class="tpl-form-body tpl-form-line">
	                <form class="am-form tpl-form-line-form" method="post" action="/article" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">标签 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            @foreach($tag as $v)
                            <label style="font-size: 14px;font-weight: normal;margin-right: 10px;"><input type="checkbox" name="tag_id[]" value="{{$v->id}}" >{{$v->name}}</label>
                           	@endforeach
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">分类</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="cate_id" >
                                @foreach($cate as $v)
                                <option value="{{$v->id}}">{{$v->name}}</option>
                             	@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">简介</label>
                        <div class="am-u-sm-9">
                            <textarea  name="intro" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">主图 </label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                <input id="doc-form-file" type="file" name="images">
                            </div>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">内容</label>
                        <div class="am-u-sm-9">
                            <div class="am-u-sm-9">
                            <textarea class="" name="content" rows="5"></textarea>
                        </div>
                        </div>
                    </div>
                    
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            	</div>
        	</div>
    	</div>
		
		

	  
	  <!-- <div class="control-group">
	    <label class="control-label" for="optionsCheckbox">Checkbox</label>
	    <div class="controls">
	      <label class="checkbox">
	        <input type="checkbox" id="optionsCheckbox" value="option1">
	        Option one is this and that—be sure to include why it's great
	      </label>
	    </div>
	  </div> -->
	  <!-- <div class="control-group">
	    <label class="control-label" for="select01">Select list</label>
	    <div class="controls">
	      <select id="select01">
	        <option>something</option>
	        <option>2</option>
	        <option>3</option>
	        <option>4</option>
	        <option>5</option>
	      </select>
	    </div>
	  </div> -->
	 <!--  <div class="control-group">
	    <label class="control-label" for="multiSelect">Multicon-select</label>
	    <div class="controls">
	      <select multiple="multiple" id="multiSelect">
	        <option>1</option>
	        <option>2</option>
	        <option>3</option>
	        <option>4</option>
	        <option>5</option>
	      </select>
	    </div>
	  </div> -->
	  <!-- <div class="control-group">
	    <label class="control-label" for="fileInput">File input</label>
	    <div class="controls">
	      <input class="input-file" id="fileInput" type="file">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="textarea">Textarea</label>
	    <div class="controls">
	      <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
	    </div>
	  </div> -->
	


@endsection