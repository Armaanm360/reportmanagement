@extends('admin.master')
@section('content')
<style>
    * {
        list-style-type: none;
    }

    .item input {
        border: none;
        width: 100%;
        text-align: inherit;
    }

</style>

<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Form')}}</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('Form')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('')}}</a>
                </li>
            </ul>
        </div>



      <form action="{{ url('appendix_six') }}" method="post">
        @csrf
              <div class="mt-4 item">
                <div class="header-item">
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৬</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="budget_sub[]" id="" value="১০। জাতীয় সংসদের অধিবেশনে মহামান্য রাষ্ট্রপতি কর্তৃক প্রদেয় ভাষণে অন্তর্ভুক্তির জন্য তথ্য প্রেরণ। (বাৎসরিক)"></li>
                      <li><input type="text" name="budget_sub[]" id="" value="১১। আর্থিক প্রতিষ্ঠান বিভাগের ২০২০-২১ অর্থবছরের বাজেট বক্তৃতায় অন্তর্ভুক্তির জন্য মন্ত্রণালয়/বিভাগ/দপ্তর/সংস্থার মৌলিক ও গুরুত্বপুর্ণ কার্যাবলি সম্পর্কে সুনির্দিষ্ট, সংক্ষিপ্ত ও পরিসংখ্যানভিত্তিক প্রতিবেদন প্রেরণ। (বাৎসরিক)"></li>
                    </ul>
                  </div>
                  <div class="header-item">
                    <div style="text-align: center;">
                      <h4>মঞ্জুরী ও বরাদ্দ দাবীসমূহ ২০১৯-২০ প্রক্ষেপণ</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="claim_1_head[]" id="" value="১।   আর্থিক প্রতিষ্ঠান বিভাগের প্রধান কার্যাবলি:">
                        <ul>
                            <li><input type="text" name="claim_1[]" id="" value="ক)	ব্যাংক, বীমা, পুঁজিবাজার ও অন্যান্য আর্থিক প্রতিষ্ঠান ও সংশ্লিষ্ট সেবা সম্পর্কিত নীতি, আইন, বিধি, প্রবিধি প্রণয়ন ও সংশোধন;"></li>
                            <li><input type="text" name="claim_1[]" id="" value="খ)	আর্থিক বাজার ও প্রতিষ্ঠান উন্নয়ন;"></li>
                            <li><input type="text" name="claim_1[]" id="" value="গ)	আর্থিক খাতের নিয়ন্ত্রক প্রতিষ্ঠানসমূহের কাজের সমন্বয় সাধন;"></li>
                            <li><input type="text" name="claim_1[]" id="" value="ঘ)	রাষ্ট্রমালিকানাধীন ব্যাংক ও আর্থিক প্রতিষ্ঠানের কার্যক্রমের সামগ্রিক পরিবীক্ষণ ও মুল্যায়ন;"></li>
                            <li><input type="text" name="claim_1[]" id="" value="ঙ) 	পুঁজিবাজারে নতুন প্রোডাক্ট প্রচলনের মাধ্যমে বাজার সম্প্রসারণ ও উত্তম মৌলভিত্তিসম্পন্ন সিকিউরিটিজ সরবরাহ বৃদ্ধি;"></li>
                            <li><input type="text" name="claim_1[]" id="" value="চ)	বীমা খাতের সংস্কারের মাধ্যমে জনগণের আস্থা বৃদ্ধি এবং বীমার আওতা বৃদ্ধির লক্ষ্যে ব্যাপক জনসচেতনতা সৃষ্টি;"></li>
                            <li><input type="text" name="claim_1[]" id="" value="ছ)	ক্ষুদ্রঋণ কার্যক্রম সম্প্রসারণের মাধ্যমে আত্মকর্মসংস্থান সৃষ্টি ও দারিদ্র বিমোচন।"></li>

                        </ul>
                    </li>
                    <li><input type="text" name="claim_2_head[]" id="" value="২।   ২০১৬-১৭ অর্থবছর থেকে ২০১৯-২০ অর্থবছরের সংশোধিত বাজেটে (পরিচালন ও উন্নয়ন) এবং ২০১৯-২০ অর্থবছরের প্রস্তাবিত বাজেটে (পরিচালন ও উন্নয়ন) আর্থিক প্রতিষ্ঠান বিভাগের অনুকূলে প্রদত্ত বরাদ্দের পরিমাণ নিম্নরূপ:">
                        
                            <table width="100%" border="1">
                                <thead>
                                    <tr>
                                        <td colspan="2">অর্থবছর</td>
                                        <td>পরিচালন</td>
                                        <td>উন্নয়ন</td>
                                        <td>মোট</td>
                                        <td>আবর্তক</td>
                                        <td>মূলধন</td>
                                        <td>আর্থিক সম্পদ</td>
                                        <td>দায়</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr class="row170">
                                      <input type="hidden" name="row_id" id="" value="1">
                                    <td class="column0 style110 s"><input type="text" name="fiscal_year_1" id="" value="2016-17"></td>
                                    <td class="column1 style111 s"><input type="text" name="topic_1" id="" value="সংশোধিত বাজেট"></td>
                                    <td class="column2 style112 s"><input type="text" name="operating_1" id="" value="158,24,80"></td>
                                    <td class="column3 style112 s"><input type="text" name="development_1" id="" value="1950,30,50"></td>
                                    <td class="column4 style112 s"><input type="text" name="total_1" id="" value="2108,55,30"></td>
                                    <td class="column5 style112 s"><input type="text" name="recurring_1" id="" value="253,47,30"></td>
                                    <td class="column6 style112 s"><input type="text" name="capital_1" id="" value="41,00"></td>
                                    <td class="column7 style112 s"><input type="text" name="asset_1" id="" value="1854,67,00"></td>
                                    <td class="column8 style112 n"><input type="text" name="liability_1" id="" value="0"></td>
                                  </tr>
                                  <tr class="row171">
                                       <input type="hidden" name="row_id" id="" value="2">
                                    <td class="column0 style110 s"><input type="text" name="fiscal_year_2" id="" value="2017-18"></td>
                                    <td class="column1 style111 s"><input type="text" name="topic_2" id="" value="সংশোধিত বাজেট"></td>
                                    <td class="column2 style112 s"><input type="text" name="operating_2" id="" value="358,93,66"></td>
                                    <td class="column3 style112 s"><input type="text" name="development_2" id="" value="1985,56,00"></td>
                                    <td class="column4 style112 s"><input type="text" name="total_2" id="" value="2344,49,66"></td>
                                    <td class="column5 style112 s"><input type="text" name="recurring_2" id="" value="373,37,66"></td>
                                    <td class="column6 style112 s"><input type="text" name="capital_2" id="" value="12,65,50"></td>
                                    <td class="column7 style112 s"><input type="text" name="asset_2" id="" value="1958,46,50"></td>
                                    <td class="column8 style112 n"><input type="text" name="liability_2" id="" value="0"></td>
                                  </tr>
                                  <tr class="row172">
                                       <input type="hidden" name="row_id" id="" value="3">
                                    <td class="column0 style110 s"><input type="text" name="fiscal_year_3" id="" value="2018-19"></td>
                                    <td class="column1 style111 s"><input type="text" name="topic_3" id="" value="সংশোধিত বাজেট"></td>
                                    <td class="column2 style112 s"><input type="text" name="operating_3" id="" value="439,04,00"></td>
                                    <td class="column3 style112 s"><input type="text" name="development_3" id="" value="2183,05,00"></td>
                                    <td class="column4 style112 s"><input type="text" name="total_3" id="" value="2622,09,00"></td>
                                    <td class="column5 style112 s"><input type="text" name="recurring_3" id="" value="341,39,60"></td>
                                    <td class="column6 style112 s"><input type="text" name="capital_3" id="" value="126,02,00"></td>
                                    <td class="column7 style112 s"><input type="text" name="asset_3" id="" value="2154,67,40"></td>
                                    <td class="column8 style112 n"><input type="text" name="liability_3" id="" value="0"></td>
                                  </tr>
                                  <tr class="row173">
                                       <input type="hidden" name="row_id" id="" value="4">
                                    <td class="column0 style110 s"><input type="text" name="fiscal_year_4" id="" value="২০১৯-২০"></td>
                                    <td class="column1 style111 s"><input type="text" name="topic_4" id="" value="বাজেট"></td>
                                    <td class="column2 style112 s"><input type="text" name="operating_4" id="" value="১৩৮,৯৭,০০"></td>
                                    <td class="column3 style112 s"><input type="text" name="development_4" id="" value="২৯০২,৫৯,০০"></td>
                                    <td class="column4 style112 s"><input type="text" name="total_4" id="" value="৩০৪১,৫৬,০০"></td>
                                    <td class="column5 style112 s"><input type="text" name="recurring_4" id="" value="২২৪,২১,০০"></td>
                                    <td class="column6 style112 s"><input type="text" name="capital_4" id="" value="৭০,৭৭,০০"></td>
                                    <td class="column7 style112 s"><input type="text" name="asset_4" id="" value="২৭৪৬,৫৮,০০"></td>
                                    <td class="column8 style113 n"><input type="text" name="liability_4" id="" value="0"></td>
                                  </tr>
                                </tbody>

                            </table>
                       
                    </li>
                    <li><input type="text" name="claim_3_head[]" id="" value="৩।   ২০১৯-২০  অর্থবছরে নিম্নবর্ণিত উল্লেখযোগ্য কার্যাবলি/প্রকল্প/কর্মসূচি সম্পাদন/বাস্তবায়ন করা হবে:">
                        <ul>
                            <li><input type="text" name="claim_3[]" id="" value="ক)	বীমা উন্নয়ন ও নিয়ন্ত্রণ কর্তৃপক্ষ আইন, ২০১০ এবং বীমা আইন, ২০১০ এর আলোকে প্রয়োজনীয় বিধি-বিধান প্রণয়ন ও কার্যকর  তদারকি;">
                            </li><li>
                                <input type="text" name="claim_3[]" id="" value="খ)	জাতীয় বীমা নীতি ২০১৪ এর সময়াবদ্ধ কর্মপরিকল্পনার বাস্তবায়ন;">
                            </li>
                            <li><input type="text" name="claim_3[]" id="" value="গ)	দেশের পুঁজিবাজারকে আরো দক্ষ, স্বচ্ছ ও গতিশীল করে বিনিয়োগকারীদের স্বার্থ রক্ষার্থে সংস্কারমূলক কার্যক্রম অব্যাহত রাখা;"></li>
                            <li>
                                <input type="text" name="claim_3[]" id="" value="ঘ)	রাষ্ট্রমালিকানাধীন বাণিজ্যিক ব্যাংক, বিশেষায়িত ব্যাংক ও আর্থিক  প্রতিষ্ঠানসমূহের কার্যক্রম পরিবীক্ষণ ও সংশ্লিষ্ট আইনসমূহের সংশোধন;">
                            </li>
                            <li>
                                <input type="text" name="claim_3[]" id="" value="ঙ)	মাইক্রোক্রেডিট রেগুলেটরি অথরিটি (এমআরএ), বাংলাদেশ ইনস্টিটিউট অব ক্যাপিটাল মার্কেট (বিআইসিএম), এবং বাংলাদেশ ইনস্যুরেন্স একাডেমি  (বিআইএ)-এর কার্যক্রম পরিবীক্ষণ ও মূল্যায়ন;"></li>
                            <li>
                                <input type="text" name="claim_3[]" id="" value="চ)	বাংলাদেশ ব্যাংক ও ইনভেস্টমেন্ট কর্পোরেশন অব বাংলাদেশ (আইসিবি)-এর ব্যবস্থাপনায় পরিচালিত সম-মূলধন উন্নয়ন তহবিল (কৃষি/আইটি) কার্যক্রম পরিবীক্ষণ;"></li>
                            <li><input type="text" name="claim_3[]" id="" value="ছ)	ক্ষুদ্রঋণ কার্যক্রম সম্প্রসারণের মাধ্যমে আত্মকর্মসংস্থান সৃষ্টি ও দারিদ্র বিমোচন।"></li>
                            <li>
                                <input type="text" name="claim_3[]" id="" value="ছ)	পল্লী কর্ম-সহায়ক ফাউন্ডেশন (পিকেএসএফ), সোশ্যাল ডেভেলপমেন্ট ফাউন্ডেশন (এসডিএফ), বাংলাদেশ এনজিও ফাউন্ডেশন (বিএনএফ) এবং বাংলাদেশ মিউনিসিপ্যাল ডেভেলপমেন্ট ফান্ড (বিএমডিএফ)-কর্তৃক বাস্তবায়নাধীন কর্মসূচিসমুহের জন্য (সামাজিক নিরাপত্তা কর্মসূচি ও আর্থিক অন্তর্ভুক্তি সম্পর্কিত কার্যাবলিসহ) বৈদেশিক ঋণ প্রাপ্তি, ঋণ চুক্তি, অথরাইজেশন সংক্রান্ত কার্যক্রম সমন্বয় ও পরিবীক্ষণ;"> </li>
                            <li> 
                                <input type="text" name="claim_3[]" id="" value="জ)	বাংলাদেশ ব্যাংক কর্তৃক বাস্তবায়নাধীন নিম্নোক্ত নন-এডিপি প্রকল্প/কর্মসূচিসমূহ: ফাইন্যান্সিং ব্রিক কিলন ইফিসিয়েন্সি ইমপ্রুভমেন্ট প্রজেক্ট (বিকেইআইপি); ফরেন ডাইরেক্ট ইনভেস্টমেন্ট প্রমোশন প্রজেক্ট, আরবান বিল্ডিং সেফটি প্রোজেক্ট; ফিন্যান্সিয়াল সেক্টর সাপোর্ট প্রজেক্ট (এফএসএসপি); সেকেন্ড স্মল এন্ড মিডিয়াম সাইজড এন্টারপ্রাইজ ডেভেলপমেন্ট প্রজেক্ট-২ (এসএমইডিপি-২); স্মল এন্ড মার্জিনাল সাইজড ফারমার্স এগ্রিকালচারাল প্রোডাক্টিভিটি ইমপ্রুভমেন্ট এন্ড ডাইভারসিফিকেশন ফাইন্যান্সিং প্রজেক্ট; বাংলাদেশ তৈরি পোশাক খাতের নিরাপত্তাজনিত সংস্কার ও পরিবেশগত উন্নয়ন প্রকল্প এবং বাংলাদেশ হাউস বিল্ডিং ফাইন্যান্স কর্পোরেশন কর্তৃক বাস্তবায়নাধীন রুরাল এন্ড পেরি আরবান হাউজিং ফাইন্যান্স প্রোজেক্ট এর বরাদ্দ নির্ধারণ, অথরাইজেশন, সমন্বয় ও পরিবীক্ষণ।">
                            </li>
                            <li>
                                <input type="text" name="claim_3[]" id="" value="ঝ)		বাংলাদেশ ব্যাংক, বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশিন এবং বীমা উন্নয়ন ও নিয়ন্ত্রণ কর্তৃপক্ষ কর্তৃক বাস্তবায়নাধীন নিম্নোক্ত এডিপিভুক্ত উন্নয়ন প্রকল্পসমূহের বরাদ্দ নির্ধারণ ও অথরাইজেশন, সমন্বয় কার্যক্রম পরিবীক্ষণ:">
                                <ul>
                                    <li>
                                        <input type="text" name="claim_31[]" id="" value="I.	ফিনান্সিয়াল সেক্টর সাপোর্ট প্রজেক্ট (এফএসএসপি)- বাংলাদেশ ব্যাংক;">
                                    </li>
                                    <li>
                                        <input type="text" name="claim_31[]" id="" value="II.	ক্যাপিটাল মার্কেট ডেভেলপমেন্ট প্রজেক্ট-৩- বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন;">
                                    </li>
                                    <li>
                                        <input type="text" name="claim_31[]" id="" value="III.	বাংলাদেশ তৈরি পোশাক খাতের নিরাপত্তাজনিত সংস্কার ও পরিবেশগত উন্নয়ন প্রকল্প- বাংলাদেশ ব্যাংক;">
                                    </li>
                                    <li>
                                        <input type="text" name="claim_31[]" id="" value="IV.	সেকেন্ড স্মল এন্ড মিডিয়াম সাইজড এন্টারপ্রাইজ ডেভেলপমেন্ট প্রজেক্ট-২ (এসএমইডিপি-২)- বাংলাদেশ ব্যাংক;">
                                    </li>
                                    <li>
                                        <input type="text" name="claim_31[]" id="" value="V.	বাংলাদেশ বীমা খাত উন্নয়ন প্রকল্প- বীমা উন্নয়ন ও নিয়ন্ত্রণ কর্তৃপক্ষ।">
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                  </ul>
                  </div>
                  {{-- <div class="header-item">
                    <div style="text-align: center;">
                      <h4>Demands for Grants and Appropriations 2019-20</h4>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="claim_eng[]" id="" value="1.	The main functions of Financial Institutions Division:">
                        <ul>
                            <li><input type="text" name="claim_eng[]" id="" value="a)	Enactment/formulation of policies, laws, rules and regulations related to Bank, Insurance, Capital market and others financial institutions and related services; "></li>
                            <li><input type="text" name="claim_eng[]" id="" value="b)	Development of financial markets and institutions;">
                                
                                </li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="c)	Co-ordination of the activities of regulatory authorities of financial sector;"></li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="d)	The overall Monitoring and Evaluation of the activities of state-owned banks and financial institutions;"></li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="e)	Expansion of Capital Market through introduction of new products and supply of securities having good fundamentals;">
                                </li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="f)	Building confidence of the people on insurance sector through implementing reform programs and expanding the coverage of insurance through creating mass awareness;"></li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="g)	Creating self-employment and reducing poverty through expansion of microcredit activities.">
                            </li>

                        </ul>
                    </li>
                    <li><input type="text" name="claim_eng[]" id="" value="2.  	The revised budget allocation (Non-Development and Development) from FY 2016-17 to FY 2018-19 and the proposed allocation (Non-Development and Development) for FY 2019-20 of Financial Institutions Division are shown below: ">
                        
                            <table width="100%" border="1">
                                <thead>
                                    <tr>
                                        <td colspan="2">Financial Year</td>
                                        <td>Operating</td>
                                        <td>Development</td>
                                        <td>Total</td>
                                        <td>Recurring</td>
                                        <td>Capital</td>
                                        <td>Asset</td>
                                        <td>Liability</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr class="row205">
                                    <td class="column0 style128 s"><input type="text" name="fiscal_year_5" id="" value="2016-17"></td>
                                    <td class="column1 style129 s"><input type="text" name="topic_5" id="" value="Revised Budget"></td>
                                    <td class="column2 style129 s"><input type="text" name="operating_5" id="" value="158,24,80"></td>
                                    <td class="column3 style129 s"><input type="text" name="development_5" id="" value="1950,30,50"></td>
                                    <td class="column4 style129 s"><input type="text" name="total_5" id="" value="2108,55,30"></td>
                                    <td class="column5 style129 s"><input type="text" name="recurring_5" id="" value="253,47,30"></td>
                                    <td class="column6 style129 s"><input type="text" name="capital_5" id="" value="41,00"></td>
                                    <td class="column7 style129 s"><input type="text" name="asset_5" id="" value="1854,67,00"></td>
                                    <td class="column8 style129 n"><input type="text" name="liability_5" id="" value="0"></td>
                                  </tr>
                                  <tr class="row206">
                                    <td class="column0 style128 s"><input type="text" name="fiscal_year_6" id="" value="2017-18"></td>
                                    <td class="column1 style129 s"><input type="text" name="topic_6" id="" value="Revised Budget"></td>
                                    <td class="column2 style129 s"><input type="text" name="operating_6" id="" value="358,93,66"></td>
                                    <td class="column3 style129 s"><input type="text" name="development_6" id="" value="1985,56,00"></td>
                                    <td class="column4 style129 s"><input type="text" name="total_6" id="" value="2344,49,66"></td>
                                    <td class="column5 style129 s"><input type="text" name="recurring_6" id="" value="373,37,66"></td>
                                    <td class="column6 style129 s"><input type="text" name="capital_6" id="" value="12,65,50"></td>
                                    <td class="column7 style129 s"><input type="text" name="asset_6" id="" value="1958,46,50"></td>
                                    <td class="column8 style129 n"><input type="text" name="liability_6" id="" value="0"></td>
                                  </tr>
                                  <tr class="row207">
                                    <td class="column0 style128 s"><input type="text" name="fiscal_year_7" id="" value="2018-19"></td>
                                    <td class="column1 style130 s"><input type="text" name="topic_7" id="" value="Revised Budget"></td>
                                    <td class="column2 style129 s"><input type="text" name="operating_7" id="" value="439,04,00"></td>
                                    <td class="column3 style129 s"><input type="text" name="development_7" id="" value="2183,05,00"></td>
                                    <td class="column4 style129 s"><input type="text" name="total_7" id="" value="2622,09,00"></td>
                                    <td class="column5 style129 s"><input type="text" name="recurring_7" id="" value="341,39,60"></td>
                                    <td class="column6 style129 s"><input type="text" name="capital_7" id="" value="126,02,00"></td>
                                    <td class="column7 style129 s"><input type="text" name="asset_7" id="" value="2154,67,40"></td>
                                    <td class="column8 style129 n"><input type="text" name="liability_7" id="" value="0"></td>
                                  </tr>
                                  <tr class="row208">
                                    <td class="column0 style128 s"><input type="text" name="fiscal_year_8" id="" value="2019-20"></td>
                                    <td class="column1 style130 null"><input type="text" name="topic_8" id="" value=""></td>
                                    <td class="column2 style129 null"><input type="text" name="operating_8" id="" value=""></td>
                                    <td class="column3 style129 null"><input type="text" name="development_8" id="" value=""></td>
                                    <td class="column4 style129 null"><input type="text" name="total_8" id="" value=""></td>
                                    <td class="column5 style129 null"><input type="text" name="recurring_8" id="" value=""></td>
                                    <td class="column6 style129 null"><input type="text" name="capital_8" id="" value=""></td>
                                    <td class="column7 style129 null"><input type="text" name="asset_8" id="" value=""></td>
                                    <td class="column8 style129 null"><input type="text" name="liability_8" id="" value=""></td>
                                  </tr>
                                </tbody>

                            </table>
                       
                    </li>
                    <li><input type="text" name="claim_eng[]" id="" value="3.   In FY 2019-20 the following important activities/projects/programs are scheduled to be implemented:">
                        <ul>
                            <li><input type="text" name="claim_eng[]" id="" value="a)	Framing rules and regulation and effective monitoring of the activities under the Insurance Development and Regulatory Authority Act, 2010 and Insurance Act, 2010;">
                                
                            </li><li>
                                
                                <input type="text" name="claim_eng[]" id="" value="b)	Implementation of time bound action plan for the National Insurance policy 2014;">
                            </li>
                            <li>
                                
                                <input type="text" name="claim_eng[]" id="" value="c)	Continuation of the reform programs to ensure transparency and efficiency and to infuse dynamism in the capital markets for safeguarding the interests of general investors;">

                            </li>
                            <li>
                                
                                <input type="text" name="claim_eng[]" id="" value="d)	Monitoring the activities of the state-owned commercial banks, specialized banks and financial institutions as well as making amendment of the related laws;">
                            </li>
                            <li>
                                
                                <input type="text" name="claim_eng[]" id="" value="e)	Monitoring and evaluation of the activities of Microcredit Regulatory Authority (MRA), Bangladesh Institute of Capital Market (BICM) and Bangladesh Insurance Academy (BIA);">
                            </li>
                            <li>
                               
                                <input type="text" name="claim_eng[]" id="" value="f)	Monitoring of Equity Entrepreneurship Fund (Agriculture/IT) managed by Bangladesh Bank and Investment Corporation of Bangladesh (ICB);">
                            </li>
                            <li>
                                <input type="text" name="claim_eng[]" id="" value="g)	Coordination and supervision of activities relating to receive foreign loan/grant, loan agreement, authorization of programs implemented by Palli Karma-Shahayak Foundation (PKSF), Social Development Foundation (SDF), Bangladesh NGO Foundation (BNF) and Bangladesh Municipal Development Fund (BMDF) including functions relating to financial inclusion and social safety nets;"></li>
                            <li>
                                
                               <input type="text" name="claim_eng[]" id="" value=" h)	Non-ADP projects being implemented by Bangladesh Bank: Financing Brick Klin Efficiency Improvement project (BKEIP); Foreign Direct Investment Promotion Project (FDIPP); Urban Building Safety Project; Financial Sector Support Project (FSSP); Second Small &amp; Medium Enterprise Development project (SMEDP-2); Small Medium sized Farmers Agricultural productivity Improvement &amp; Diversification Financing and Credit Facility Program to Finance-RMG Project and Rural &amp; Perry Urban Housing Finance Project being implemented by Bangladesh House Building Finance Corporation."> </li>
                            <li>
                               <input type="text" name="claim_eng[]" id="" value="i)	Monitoring, allocation, authorization and co-ordination of the following ADP development projects implemented by the Bangladesh Bank, Bangladesh Securities and Exchange Commission and Insurance Development and Regulatory Authority:">
                                <ul>
                                    <li>
                                       
                                       <input type="text" name="claim_eng[]" id="" value="i.	Financial Sector Support Project (FSSP) being implemented by Bangladesh Bank (BB);"> 

                                    </li>
                                    <li>
                                        
                                       <input type="text" name="claim_eng[]" id="" value="ii.	Capital Market Development Project-III being implemented by Bangladesh Securities and Exchange Commission (BSEC);"> 
                                    </li>
                                    <li>
                                        
                                       <input type="text" name="claim_eng[]" id="" value="iii.	Credit Facility Program to Finance-RMG being implemented by BB;"> 
                                    </li>
                                    <li>
                                        
                                        <input type="text" name="claim_eng[]" id="" value="iv.	Second Small &amp; Medium Enterprise Development project (SMEDP-2) being implemented by BB.">
                                    </li>
                                    <li>
                                        
                                        <input type="text" name="claim_eng[]" id="" value="v.	Bangladesh Insurance Sector Development Project being implemented by Insurance Development Regulatory Authority (IDRA);">
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                  </ul>
                  </div> --}}
                  
              </div>
              <div class="mt-4 mb-4 input-final">
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>
              </div>
          </form>


        @endsection
