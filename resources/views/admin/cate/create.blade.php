@extends('admin.default.default')

@section('title')

添加分类

@endsection

@section('content')
<div class="slate">
								
	<div class="page-header">
		<h2>添加分类</h2>
	</div>
	   <div class="tpl-block">
        	<div class="am-g">
            	<div class="tpl-form-body tpl-form-line">
	                <form class="am-form tpl-form-line-form" method="post" action="/cate">
	                    <div class="am-form-group">
	                        <label for="user-name" class="am-u-sm-3 am-form-label">分类名 <span class="tpl-form-line-small-title"></span></label>
	                        <div class="am-u-sm-9">
	                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="">
	                            <small>请填写标题文字6-20位字母数字下划线</small>
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