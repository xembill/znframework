<?php
namespace ZN\Components;

interface DataGridInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Columns
	//----------------------------------------------------------------------------------------------------
	//
	// @param  array $columns -> Grid'de gösterilecek sütunlar
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function columns(Array $columns);
	
	//----------------------------------------------------------------------------------------------------
	// Process Columns
	//----------------------------------------------------------------------------------------------------
	//
	// @param  string $column   -> İşlem yapılacak sütun adı
	// @param  bool   $editable -> Bu sütunun düzenlenebilir olup olmayacağı
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function processColumn(String $column, Boolean $editable);
	
	//----------------------------------------------------------------------------------------------------
	// Table
	//----------------------------------------------------------------------------------------------------
	//
	// @param  string $table -> İşlem yapılacak esas tablo
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function table(String $table);
	
	//----------------------------------------------------------------------------------------------------
	// Limit
	//----------------------------------------------------------------------------------------------------
	//
	// @param  numeric $limit -> Tek bir sayfada görüntülenecek kayıt sayısı.
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function limit($limit);
	
	//----------------------------------------------------------------------------------------------------
	// Order By
	//----------------------------------------------------------------------------------------------------
	//
	// @param  string $column -> Sıralama sütunu.
	// @param  string $order  -> Sıralama türü.
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function orderBy(String $column, String $order);
	
	//----------------------------------------------------------------------------------------------------
	// Group By
	//----------------------------------------------------------------------------------------------------
	//
	// @param  string $column -> Gruplama sütunu.
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function groupBy(String $column);
	
	//----------------------------------------------------------------------------------------------------
	// Where
	//----------------------------------------------------------------------------------------------------
	//
	// @param  array  args -> koşul oluşturmak için kullanılır.
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function where(...$args);
	
	//----------------------------------------------------------------------------------------------------
	// Table
	//----------------------------------------------------------------------------------------------------
	//
	// @param  array $tables -> Birleştirilecek tablolar dizisi
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function joins(Array $tables);
	
	//----------------------------------------------------------------------------------------------------
	// Create
	//----------------------------------------------------------------------------------------------------
	//
	// @param  void
	// @return object
	//
	//----------------------------------------------------------------------------------------------------
	public function create();
}