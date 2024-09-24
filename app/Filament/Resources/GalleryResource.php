<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = 'Galeri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('İsim'),
                Grid::make()->schema([
                    FileUpload::make('before')
                        ->label('Öncesi')
                        ->disk('local')
                        ->directory('public/gallery-images')
                        ->preserveFilenames()
                        ->imageEditor()
                        ->imageResizeMode('cover')->imageCropAspectRatio('9:16'),
                    FileUpload::make('after')
                        ->label('Sonrası')
                        ->disk('local')
                        ->directory('public/gallery-images')
                        ->preserveFilenames()
                        ->imageEditor()
                        ->imageResizeMode('cover')->imageCropAspectRatio('9:16'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('İsim'),
                TextColumn::make('created_at')->label('Oluşturulma Tarihi'),
                TextColumn::make('edited_at')->label('Düzenlenme Tarihi')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
