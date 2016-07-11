<?php
require_once('phpgrid/conf.php');

class CI_phpgrid {

    public function example_method($val = '')
    {
        $dg = new C_DataGrid("SELECT * FROM Orders", $val, "Orders");
        return $dg;
    }
	
	public function master_ba(){
		$master_ba = new C_DataGrid("SELECT * FROM Ms_BA","ID_BA","Ms_BA");
		return $master_ba;
	}
	
	public function pivot_absensi(){
		$pivot_absensi = new C_DataGrid("SELECT * FROM PivotAbsen","NAMA_BA","PivotAbsen");
		return $pivot_absensi;
	}
	
	public function pivot_sellout_unit(){
		$pivot_absensi = new C_DataGrid("SELECT * FROM PivotSellProductUnit","NAMA_BA","PivotSellProductUnit");
		return $pivot_absensi;
	}
	
	public function pivot_sellout_value(){
		$pivot_absensi = new C_DataGrid("SELECT * FROM PivotSellProductValue","NAMA_BA","PivotSellProductValue");
		return $pivot_absensi;
	}
	
	public function pivot_performance_unit(){
		$pivot_performance_unit = new C_DataGrid("SELECT * FROM PivotPerformanceUnit","NAMA_BA","PivotPerformanceUnit");
		return $pivot_performance_unit;
	}
	
	public function pivot_performance_value(){
		$pivot_performance_value = new C_DataGrid("SELECT * FROM PivotPerformanceValue","NAMA_BA","PivotPerformanceValue");
		return $pivot_performance_value;
	}
	
	public function pivot_sellout_unit_ntspc(){
		$pivot_absensi = new C_DataGrid("SELECT * FROM PivotSellProductUnitNTSPC","NAMA_BA","PivotSellProductUnitNTSPC");
		return $pivot_absensi;
	}
	
	public function pivot_sellout_value_ntspc(){
		$pivot_absensi = new C_DataGrid("SELECT * FROM PivotSellProductValueNTSPC","NAMA_BA","PivotSellProductValueNTSPC");
		return $pivot_absensi;
	}
	
	public function pivot_performance_unit_ntspc(){
		$pivot_performance_unit = new C_DataGrid("SELECT * FROM PivotPerformanceUnitNTSPC","NAMA_BA","PivotPerformanceUnitNTSPC");
		return $pivot_performance_unit;
	}
	
	public function pivot_performance_value_ntspc(){
		$pivot_performance_value = new C_DataGrid("SELECT * FROM PivotPerformanceValueNTSPC","NAMA_BA","PivotPerformanceValueNTSPC");
		return $pivot_performance_value;
	}
	
	public function pivot_recap_sellout_ntspc(){
		$pivot_recap = new C_DataGrid("SELECT * FROM Pivot_Recap_Sell_Out_NTSPC","NAMA_BA","Pivot_Recap_Sell_Out_NTSPC");
		return $pivot_recap;
	}
	
	public function pivot_call_ec(){
		$pivot_absensi = new C_DataGrid("SELECT * FROM PivotCall","NAMA_BA","PivotCall");
		return $pivot_absensi;
	}
	
	public function pivot_recap_sellout(){
		$pivot_recap = new C_DataGrid("SELECT * FROM Pivot_Recap_Sell_Out","NAMA_BA","Pivot_Recap_Sell_Out");
		return $pivot_recap;
	}
	
	public function master_tl(){
		$master_tl = new C_DataGrid("SELECT * FROM Ms_TL","ObjectID","Ms_TL");
		return $master_tl;
	}
	
	public function master_kba(){
		$master_kba = new C_DataGrid("SELECT * FROM Ms_KBA","ObjectID","Ms_KBA");
		return $master_kba;
	}
	
	public function master_asm(){
		$master_asm = new C_DataGrid("SELECT * FROM Table_ASM","ObjectID","Table_ASM");
		return $master_asm;
	}
	
	public function master_rsm(){
		$master_rsm = new C_DataGrid("SELECT * FROM Table_RSM","ID_RSM","Table_RSM");
		return $master_rsm;
	}
	
	public function master_area(){
		$master_area = new C_DataGrid("SELECT * FROM Ms_AREA","ID_AREA","Ms_AREA");
		return $master_area;
	}
	
	public function master_outlet(){
		$master_outlet = new C_DataGrid("SELECT * FROM Ms_OUTLET","ID_OUTLET","Ms_OUTLET");
		return $master_outlet;
	}
	
	public function master_product(){
		$master_product = new C_DataGrid("SELECT * FROM Ms_PRODUCT","ID_PRODUCT","Ms_PRODUCT");
		return $master_product;
	}
	
	public function master_product_ntspc(){
		$master_product = new C_DataGrid("SELECT * FROM Ms_Spesifikasi","PRODUCT_KODE_PRINCIPLE","Ms_Spesifikasi");
		return $master_product;
	}
	
	public function master_category(){
		$master_category = new C_DataGrid("SELECT * FROM Ms_PRODUCT_CATEGORY","ID_TIPE_PRODUCT","Ms_PRODUCT_CATEGORY");
		return $master_category;
	}
	
	public function messages_inbox(){
		$messages = new C_DataGrid("SELECT * FROM View_EVAN_Inbox","ObjectID","View_EVAN_Inbox");
		return $messages;
	}
	
	public function messages_original(){
		$messages = new C_DataGrid("SELECT * FROM new_inbox","object_id","new_inbox");
		return $messages;
	}
	
	public function messages_information_header(){
		$header = new C_DataGrid("SELECT ObjectID as ParentObjectID , RefObjectID, ReceiveDt, ProcessedDt, TransDt, SenderNumber, ID_OUTLET, NAMA_OUTLET, ID_BA, ID_BA as Name FROM  NewHeader","ParentObjectID","NewHeader");
		return $header;
	}
	
	public function messages_information_detail(){
		$detail = new C_DataGrid("SELECT ObjectID, ParentObjectID, TransDt, ID_OUTLET, ID_PRODUCT, PRODUCT_KODE_PRINCIPLE, NAMA_PRODUCT, DESCRIPTION_PRINCIPLE, Qty FROM  NewDetail","ObjectID","NewDetail");
		return $detail;
	}
	
	public function messages_final_header(){
		$header = new C_DataGrid("SELECT ObjectID as ParentObjectID , RefObjectID, ReceiveDt, ProcessedDt, TransDt, SenderNumber, ID_OUTLET, NAMA_OUTLET, ID_BA, ID_BA as Name FROM  FinalHeader","ParentObjectID","FinalHeader");
		return $header;
	}
	
	public function messages_final_detail(){
		$detail = new C_DataGrid("SELECT ObjectID, ParentObjectID, TransDt, ID_OUTLET, ID_PRODUCT, PRODUCT_KODE_PRINCIPLE, NAMA_PRODUCT, DESCRIPTION_PRINCIPLE, Qty FROM  FinalDetail","ObjectID","FinalDetail");
		return $detail;
	}
	
	public function messages_h(){
		$header = new C_DataGrid("SELECT * FROM  NewHeader","ObjectID","NewHeader");
		return $header;
	}
	
	public function messages_d(){
		$detail = new C_DataGrid("SELECT * FROM  View_1","ObjectID","View_1");
		return $detail;
	}
}