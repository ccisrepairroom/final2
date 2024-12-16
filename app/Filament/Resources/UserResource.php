<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Customers';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('profile_image')
                ->avatar()
                ->preserveFileNames(),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->required(),
                Forms\Components\TextInput::make('password')
                    ->required(),
                Forms\Components\TextInput::make('is_admin')
                    ->required(),
                Forms\Components\TextInput::make('contact_number')
                    ->tel()
                    ->required(),
                Forms\Components\TextInput::make('is_frequent_shopper')
                    ->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->deferLoading()
            ->columns([

                ImageColumn::make('profile_image')
                ->circular()
            
                ->toggleable(),
                Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->toggleable()
                ->weight('bold'),
                Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->toggleable()
                ->sortable(),
                Tables\Columns\ToggleColumn::make('is_admin')
                ->toggleable()
                ->sortable()
                ->sortable(),
                Tables\Columns\ToggleColumn::make('is_frequent_shopper')
                ->toggleable()
                ->sortable()
                ->sortable(),
                Tables\Columns\TextColumn::make('contact_number')
                ->toggleable()
                ->sortable()
                ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                ->sortable()
                ->toggleable()
                ->searchable()
                ->date('M d H:i'),
                Tables\Columns\TextColumn::make('updated_at')
                ->sortable()
                ->toggleable()
                ->searchable()
                ->date('M d H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            //'create' => Pages\CreateUser::route('/create'),
            //'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
