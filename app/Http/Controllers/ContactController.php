<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = Contact::all();
        return response()->json([
            'contacts' => $contacts,
            'message' => 'All contacts.',
            'code' => 200,
        ]);
    }

    public function addContact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->contact_no = $request->contact_no;
        $contact->save();

        return response()->json([
            'message' => 'Contact created successfully',
            'code' => 200,
        ]);
    }

    public function editContact($id)
    {
        $contact = Contact::find($id);
        return response()->json($contact);
    }

    public function updateContact(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->contact_no = $request->contact_no;
        $contact->save();

        return response()->json([
            'message' => 'Contact Updated Successfully',
            'code' => 200,
        ]);
    }

    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        if($contact){
            $contact->delete();
            return response()->json([
                'message' => 'Contact deleted successfully',
                'code' => 200,
            ]);
        } else {
            return response()->json([
                'message' => 'Contact not found',
            ]);
        }
    }
}
