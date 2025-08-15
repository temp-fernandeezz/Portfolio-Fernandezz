<?php

namespace App\Filament\Pages;

use App\Settings\HomeSetting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class HomeSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationLabel = 'Configurações da Home';

    protected static ?string $navigationGroup = 'Configurações';

    protected static string $settings = HomeSetting::class;
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Certificados')
                    ->description('Envie as imagens dos seus certificados (múltiplos arquivos).')
                    ->schema([
                        FileUpload::make('certificates')
                            ->label('Fotos dos Certificados')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->openable()
                            ->downloadable()
                            ->disk('public')
                            ->directory('certificates')
                            ->preserveFilenames()
                            ->maxFiles(30)
                            ->maxSize(4096)
                            ->hint('Formatos: JPG/PNG/WebP. Máx 30 imagens, 4MB cada.')
                    ])->collapsible(),
                Section::make('Competências')
                    ->description('Liste suas competências e a classe do ícone do Font Awesome (ex: "fab fa-php").')
                    ->schema([
                        Repeater::make('skills')
                            ->label('Itens de Competências')
                            ->schema([
                                TextInput::make('title')->label('Título')->required(),
                                TextInput::make('subtitle')->label('Subtítulo')->maxLength(120),
                                TextInput::make('icon_class')
                                    ->label('Classe do Ícone (Font Awesome)')
                                    ->placeholder('ex: fab fa-php')
                                    ->helperText('Use classes do Font Awesome, ex: "fab fa-php", "fas fa-code".')
                                    ->required(),
                            ])
                            ->reorderable()
                            ->collapsed(),
                    ])->collapsible(),
                Section::make('Sobre Mim')
                    ->description('Configurações do perfil e informações pessoais.')
                    ->schema([
                        RichEditor::make('about_me')
                            ->label('Sobre Mim')
                            ->required(),
                    ])
                    ->collapsible(),
            ]);
    }
}
