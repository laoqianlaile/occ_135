<div id="tab_edit_<?=$time?>"
	 class="easyui-tabs"
     data-options="fit:true,
    			   border:false,
    			   showHeader:false,
            	   tabWidth:150,
            	   onSelect: function(title,index)
            	   {
            	   		if( title == '操作日志' && $('#table_indexlog_<?=$time?>').length > 0)
            	   		{
            	   			$('#table_indexlog_<?=$time?>').datagrid('reload');
            	   		}
            	   }">
    <div title="技术方向"
         style="">

        <div id="l_<?=$time?>"
	   		class="easyui-layout"
		 	data-options="fit:true">

		 	<div data-options="region:'north',border:false"
		 		style="height:auto;padding-top:15px;overflow:hidden;">
		 		<? if( ! empty($log_time) ){ ?>
		 		<center><span class="tb_title"><b>操作日志</b></span></center>
				<table style="width:800px;margin:0 auto;" class="table_no_line">
	       			<tr>
	       				<td style="width:'33%';">
	       				<b>操作时间:</b> <?=$log_time?>
	       				</td>
	       				<td style="width:'33%';">
	       				<b>操作类型:</b> <?=$log_act?>
	       				</td>
	       				<td style="width:'34%';">
	       				<b>操作人:</b> <?=$log_c_name?>[<?=$log_a_login_id?>]
	       				</td>
	       			</tr>
	       			<tr>
	       				<td colspan="3">
	       				    <input class="easyui-textbox oa_input"
		       						data-options="label:'<b>备注:</b>',
		       									  labelWidth:60,
												  multiline:true,
												  height:40,
												  readonly:true,
												  iconCls:'icon-lock'"
									value="<?=$log_note?>"
		       						style="width:100%"/>
	       				</td>
	       			</tr>
	       		</table>
		 		<br/>
		 		<? }?>
		 		<center><span class="tb_title"><b>培训记录</b></span></center>

		 		<table id="table_h_<?=$time?>" class="table_no_line"  style="width:800px;margin:0 auto;">
		 			<tr>
		       			<td style="width:50%">

		       			</td>
		       			<td style="width:'50%';text-align:right;">
		       			<b><?=$db_time_create?></b>
		       			</td>
		       		</tr>
		       		<tr>
		       			<td style="width:'50%';">
		       				<a href="javascript:void(0)" oaname="btn_save" class="easyui-linkbutton oa_op" data-options="iconCls:'icon-save'" onClick="f_submit_<?=$time?>('save');">保存</a>
							<a href="javascript:void(0)" oaname="btn_import" class="easyui-linkbutton oa_op" data-options="iconCls:'icon-xlsx'" onClick="fun_xlsx_import('proc_hr/m_hr_train','培训记录','proc_hr/hr_train/import')">导入</a>
						</td>
		       			<td style="width:'50%';text-align:right;">
		       				<a href="javascript:void(0)" oaname="btn_person" class="easyui-linkbutton oa_op" data-options="iconCls:'icon-man'" onClick="fun_person_create($('#f_<?=$time?>'),'<?=$url_conf?>')">个性化</a>
		       				<a href="javascript:void(0)" oaname="btn_log" class="easyui-linkbutton oa_op" data-options="iconCls:'icon-log'" onClick="$('#tab_edit_<?=$time?>').tabs('select',1)">日志</a>
		       				<a href="javascript:void(0)" oaname="btn_del" class="easyui-linkbutton oa_op" data-options="iconCls:'icon-cancel'" onClick="$.messager.confirm('确认','您确认想要删除记录吗？',function(r){if(r)f_submit_<?=$time?>('del');});">删除</a>
		       			</td>
		       		</tr>
		       	</table>
		 	</div>

		 	<div data-options="region:'center',border:false" style="padding:5px;">
		 		<form id="f_<?=$time?>" class="easyui-form" method="post" data-options="novalidate:false" time="<?=$time?>">
		 			<table id="table_f_<?=$time?>" style="width:800px;margin:0 auto;">
						<tr class="set_width">
	                    	<td style="width:15%"></td>
                            <td style="width:35%"></td>
	                        <td style="width:15%"></td>
                            <td style="width:35%"></td>
	                    </tr>

	                    <tr class="tr_title">
	                    	<td colspan="4" style="height:35px;text-align:left"  >
	                    		<span>基本信息</span>
	                    	</td>
	                    </tr>

	                    <tr>
	                    	<td class="field_s" style="height:35px;vertical-align:text-center;"  >
                               	起始时间
                            </td>
                            <td style="height:35px;vertical-align:text-center;" >
                            	<input name="content[hr_t_time_start]"
					    			   oaname="content[hr_t_time_start]"
					    			   class="easyui-datebox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'200',
													 validType:['errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                            <td class="field_s" style="height:35px;vertical-align:text-center;"  >
                               	截止时间
                            </td>
                            <td style="height:35px;vertical-align:text-center;" >
                            	<input name="content[hr_t_time_end]"
					    			   oaname="content[hr_t_time_end]"
					    			   class="easyui-datebox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'200',
													 validType:['errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
	                    </tr>

	                    <tr>
	                    	<td class="field_s" style="height:35px;vertical-align:text-center;"  >
                               	培训名称
                            </td>
                            <td style="height:35px;vertical-align:text-center;" colspan="3">
                            	<input name="content[hr_t_name]"
					    			   oaname="content[hr_t_name]"
					    			   class="easyui-textbox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'100%',
													 validType:['length[0,200]','errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                         </tr>

                          <tr>
	                    	<td class="field_s" style="height:35px;vertical-align:text-center;"  >
                               	培训单位
                            </td>
                            <td style="height:35px;vertical-align:text-center;" colspan="3">
                            	<input name="content[hr_t_org]"
					    			   oaname="content[hr_t_org]"
					    			   class="easyui-textbox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'100%',
													 validType:['length[0,200]','errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                         </tr>

                          <tr>
	                    	<td class="field_s" style="height:35px;vertical-align:text-center;"  >
                               	证书名称
                            </td>
                            <td style="height:35px;vertical-align:text-center;" colspan="3">
                            	<input name="content[hr_t_ca_name]"
					    			   oaname="content[hr_t_ca_name]"
					    			   class="easyui-textbox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'100%',
													 validType:['length[0,200]','errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                         </tr>

                          <tr>
	                    	<td class="field_s" style="height:35px;vertical-align:text-center;"  >
                               	证书截止时间
                            </td>
                            <td style="height:35px;vertical-align:text-center;" >
                            	<input name="content[hr_t_time_ca_end]"
					    			   oaname="content[hr_t_time_ca_end]"
					    			   class="easyui-datebox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'200',
													 validType:['errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                            <td class="field_s oa_op" style="height:35px;vertical-align:text-center;"   oaname="content[hr_t_type_last]">
                               	是否续证
                            </td>
                            <td class="oa_op" style="height:35px;vertical-align:text-center;"  oaname="content[hr_t_type_last]">
                            	<input name="content[hr_t_type_last]"
					    			   oaname="content[hr_t_type_last]"
					    			   class="easyui-combobox oa_input"
					    			   data-options="err:err,
					    			   				 limitToList:true,
					    			   				 valueField:'id',
						    						 textField:'text',
					    			   				 height:'25',
					    			   				 width:'200px',
					    			   				 multiline:false,
					    			   				 data: [<?=element('base_yn',$json_field_define)?>],
					    			   				 panelHeight:'auto',
					    			   				 panelMaxHeight:120,
					    			   				 panelWidth:'',
													 validType:['errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                         </tr>

                         <tr>
	                    	<td class="field_s oa_op" style="height:35px;vertical-align:text-center;"  oaname="content[hr_t_person]">
                               	证明人
                            </td>
                            <td class="oa_op"  style="height:35px;vertical-align:text-center;" oaname="content[hr_t_person]">
                            	<input name="content[hr_t_person]"
					    			   oaname="content[hr_t_person]"
					    			   class="easyui-textbox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'200',
													 validType:['length[0,100]','errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                            <td class="field_s oa_op" style="height:35px;vertical-align:text-center;"  oaname="content[hr_t_person_tel]">
                               	联系方式
                            </td>
                            <td class="oa_op"  style="height:35px;vertical-align:text-center;" oaname="content[hr_t_person_tel]">
                            	<input name="content[hr_t_person_tel]"
					    			   oaname="content[hr_t_person_tel]"
					    			   class="easyui-textbox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'200',
													 validType:['length[0,100]','errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                         </tr>

                          <tr>
                          	<td class="field_s oa_op" style="height:35px;vertical-align:text-center;"   oaname="content[hr_t_expense]">
                               	培训费用
                            </td>
                            <td class="oa_op"  style="height:35px;vertical-align:text-center;"  oaname="content[hr_t_expense]">
                            	<input name="content[hr_t_expense]"
					    			   oaname="content[hr_t_expense]"
					    			   class="easyui-numberbox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'200',
					    			   				 precision:2,
					    			   				 groupSeparator:',',
													 validType:['errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
	                    	<td class="field_s oa_op" style="height:35px;vertical-align:text-center;" oaname="content[hr_t_date_work]" >
                               	服务期期限
                            </td>
                            <td class="oa_op"  style="height:35px;vertical-align:text-center;" oaname="content[hr_t_date_work]">
                            	<input name="content[hr_t_date_work]"
					    			   oaname="content[hr_t_date_work]"
					    			   class="easyui-datebox oa_input"
					    			   data-options="err:err,
					    			   				 height:'25',
					    			   				 width:'200',
													 validType:['errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                         </tr>

                          <tr>
	                    	<td class="field_s" style="height:35px;vertical-align:text-center;"  >
                               	备注
                            </td>
                            <td style="height:35px;vertical-align:text-center;" colspan="3">
                            	<input name="content[hr_t_note]"
					    			   oaname="content[hr_t_note]"
					    			   class="easyui-textbox oa_input"
					    			   data-options="err:err,
					    			   				 height:'50',
					    			   				 width:'100%',
					    			   				 multiline:true,
													 validType:['errMsg[\'#hd_err_f_<?=$time?>\']'],
													 ">
                            </td>
                         </tr>

	                 </table>

	                 <!-- 数据校验时间 -->
					<input class="db_time_update" name="content[db_time_update]" type="hidden" />

		 		</form>

		 		 <!-- 验证错误 -->
         		 <input id="hd_err_f_<?=$time?>" type="hidden" />

		 	</div>

		</div>

    </div>
    <div title="操作日志"
    	 oaname="tab_log"
       	 data-options="iconCls:'icon-log',
       				  href:'base/main/load_win_log_operate',
       				  queryParams:{
       				  	parent_id: 'tab_edit_<?=$time?>',
						op_id: '<?=$hr_t_id?>',
						table: 'hr_train',
						field: 'hr_t_id',
						time: 'log_<?=$time?>'
       				 }"
       	>

    </div>

</div>

<!-- loading -->
<div id="win_loading<?=$time?>" style="padding:5px;overflow:hidden;"></div>