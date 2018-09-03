@extends('admin.default.default')

@section('title')

添加页面

@endsection

@section('content')
<div class="slate">
								
	<div class="page-header">
		<h2>用户添加</h2>
	</div>
	   <div class="tpl-block">
        	<div class="am-g">
            	<div class="tpl-form-body tpl-form-line">
	                <form class="am-form tpl-form-line-form" method="post" action="/setting" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">作者名字 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting ? $setting->name : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">简介</label>
                        <div class="am-u-sm-9">
                            <textarea class="" name="intro" rows="5">{{$setting ? $setting->intro : ''}}</textarea>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">域名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" value="{{$setting ? $setting->qrcode : ''}}"  name="domain" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">二维码 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="qrcode" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">网站标题 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting ? $setting->title : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">关键字 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="keywords" class="tpl-form-input" id="user-name" placeholder=""  value="{{$setting ? $setting->title : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">描述 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <textarea class="" name="miaoshu" rows="5">{{$setting ? $setting->miaoshu : ''}}</textarea>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">作者的详细介绍 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></script>
                        </div>
                    </div>
                    <script>
                        var ue = UE.getEditor('editor');
                    </script>

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