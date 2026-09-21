<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageContentController extends Controller
{
    /**
     * Show edit form for About Us page contents.
     */
    public function editAbout()
    {
        $currentValues = HomePageContent::getSection('about_us');
        return view('admin.pages.about-us', compact('currentValues'));
    }

    /**
     * Update About Us page contents.
     */
    public function updateAbout(Request $request)
    {
        $textFields = [
            'subtitle',
            'main_title',
            'desc_1',
            'desc_2',
            'video_url',
            'author_name',
            'author_rank',
            'counter_1_title',
            'counter_1_number',
            'counter_2_title',
            'counter_2_number',
            'counter_3_title',
            'counter_3_number',
        ];

        foreach ($textFields as $field) {
            $type = in_array($field, ['desc_1', 'desc_2']) ? 'textarea' : ($field === 'video_url' ? 'url' : 'text');
            HomePageContent::setValue('about_us', $field, $request->input($field), $type);
        }

        // Handle image uploads
        $imageFields = ['image_1', 'image_2', 'author_signature'];
        $uploadDir = public_path('img/uploads/pages');
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        foreach ($imageFields as $imgField) {
            if ($request->hasFile($imgField)) {
                $file = $request->file($imgField);
                $filename = 'about_' . $imgField . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadDir, $filename);
                HomePageContent::setValue('about_us', $imgField, 'img/uploads/pages/' . $filename, 'image');
            }
        }

        return redirect()->route('admin.about.edit')
            ->with('success', 'About Us page content updated successfully!');
    }

    /**
     * Show edit form for Contact Us page contents.
     */
    public function editContact()
    {
        $currentValues = HomePageContent::getSection('contact_us');
        return view('admin.pages.contact-us', compact('currentValues'));
    }

    /**
     * Update Contact Us page contents.
     */
    public function updateContact(Request $request)
    {
        $fields = [
            'subtitle'        => 'text',
            'main_title'      => 'text',
            'form_title'      => 'text',
            'phone_title'     => 'text',
            'phone_subtitle'  => 'text',
            'phone_1'         => 'text',
            'phone_2'         => 'text',
            'email_title'     => 'text',
            'email_1'         => 'text',
            'email_2'         => 'text',
            'office_title'    => 'text',
            'office_address'  => 'textarea',
            'facebook_url'    => 'url',
            'twitter_url'     => 'url',
            'instagram_url'   => 'url',
            'youtube_url'     => 'url',
            'map_iframe_url'  => 'textarea',
        ];

        foreach ($fields as $key => $type) {
            $value = $request->input($key);
            // If user pasted a full <iframe src="..."> tag into the map input, extract just the src URL
            if ($key === 'map_iframe_url' && !empty($value) && preg_match('/src=["\']([^"\']+)["\']/', $value, $matches)) {
                $value = $matches[1];
            }
            HomePageContent::setValue('contact_us', $key, $value, $type);
        }

        return redirect()->route('admin.contact.edit')
            ->with('success', 'Contact Us page content updated successfully!');
    }
}
