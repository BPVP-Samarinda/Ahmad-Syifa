<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataPembeliResource\Pages;
use App\Filament\Resources\DataPembeliResource\RelationManagers;
use App\Models\DataPembeli;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataPembeliResource extends Resource
{
    protected static ?string $model = DataPembeli::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->ColumnSpan('full'),
                Forms\Components\TextInput::make('umur')->numeric()->ColumnSpan('full'),
                Forms\Components\TextInput::make('gender')->ColumnSpan('full'),
                Forms\Components\TextInput::make('alamat')->ColumnSpan('full'),
                Forms\Components\TextInput::make('agama')->ColumnSpan('full'),            
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('umur'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('agama')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageDataPembelis::route('/'),
        ];
    }    
}
