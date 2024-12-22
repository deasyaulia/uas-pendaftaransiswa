<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Models\Pendaftaran;
use App\Models\Jurusan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Form configuration for Create and Edit pages
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_pendaftar')
                    ->label('Nama Pendaftar')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan nama pendaftar'),

                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->placeholder('Masukkan email pendaftar'),

                Forms\Components\Select::make('jurusan_id')
                    ->label('Jurusan')
                    ->required()
                    ->options(Jurusan::all()->pluck('nama_jurusan', 'id'))
                    ->searchable()
                    ->placeholder('Pilih jurusan'),

                Forms\Components\DatePicker::make('tanggal_pendaftaran')
                    ->label('Tanggal Pendaftaran')
                    ->required()
                    ->placeholder('Pilih tanggal pendaftaran'),
            ]);
    }

    /**
     * Table configuration for List page
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_pendaftar')
                    ->label('Nama Pendaftar')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('jurusan.nama_jurusan')
                    ->label('Jurusan')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('tanggal_pendaftaran')
                    ->label('Tanggal Pendaftaran')
                    ->sortable()
                    ->date(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Relations for the resource
     */
    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika ada
        ];
    }

    /**
     * Pages for the resource
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}
