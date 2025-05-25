<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';
    protected static ?string $title = 'Ubah Password';
    protected static string $view = 'filament.pages.change-password';

    public $current_password;
    public $new_password;
    public $new_password_confirmation;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('current_password')
                ->label('Password Lama')
                ->password()
                ->required(),

            Forms\Components\TextInput::make('new_password')
                ->label('Password Baru')
                ->password()
                ->required()
                ->minLength(8),

            Forms\Components\TextInput::make('new_password_confirmation')
                ->label('Konfirmasi Password Baru')
                ->password()
                ->required()
                ->same('new_password'),
        ];
    }

    public function changePassword()
    {
        $user = Auth::user();

        if (! Hash::check($this->current_password, $user->password)) {
            $this->addError('current_password', 'Password lama tidak cocok.');
            return;
        }

        if ($this->new_password !== $this->new_password_confirmation) {
            $this->addError('new_password_confirmation', 'Konfirmasi password tidak cocok.');
            return;
        }


        $user->update([
            'password' => Hash::make($this->new_password),
        ]);

        Notification::make()
        ->title('Password berhasil diubah!')
        ->success()
        ->send();

        $this->resetForm(); // reset form
    }

    public function resetForm()
    {
        $this->current_password = null;
        $this->new_password = null;
        $this->new_password_confirmation = null;

        $this->form->fill(); // reset state form ke default (null)
    }


}
