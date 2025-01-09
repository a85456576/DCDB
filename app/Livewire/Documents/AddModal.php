<?php

namespace App\Livewire\Documents;

use App\Models\Company;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class AddModal extends Component
{
    public $file,$nameFile,$code,$companyID,$userID,$categoryShrot;
    public function render()
    {
        return view('livewire.documents.add-modal');
    }

    public function add(){
        $this->validate([
            'nameFile' => 'required|min:3|max:25|string',
            'file' => 'nullable|mimes:pdf,xlsx,docx,doc,xls',
            'categoryShrot' => 'required',
        ]);
        $currentYear = date('Y');
        $lastOrder = Document::latest('id')->first();

        if ($lastOrder) {
            $lastYear = substr($lastOrder->order_code, 4, 4);
            $sequence = $lastYear == $currentYear
                ? intval(substr($lastOrder->order_code, -3)) + 1
                : 1;
        } else {
            $sequence = 1;
        }
        $this->code = $this->categoryShrot. '-' . $currentYear . '-' . str_pad($sequence, 3, '0', STR_PAD_LEFT);

        Document::create([
            'name_file' => $this->nameFile,
            'file' => $this->file->store('files', 'public'),
            'category_shrot' => $this->categoryShrot,
            'company_id' => Company::where('id'),
            'user_id' => Auth::id(),
            'code' => $this->code

        ]);
    }

}


