
        <style>
{
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


      <form id="submitForm" method="post">
            @csrf
             <input type="hidden" name="form_unique_id" class="form_unique_id" value="{{$form_data['unique_form_id']}}">
            <input type="hidden" name="unit_office_to" value="{{$form_data['unit_office_to']}}">
            <input type="hidden" name="unit_office" value="{{$form_data['unit_office']}}">
            <input type="hidden" name="office" value="{{$form_data['office']}}">
            <input type="hidden" name="department" value="{{$form_data['department']}}">
            <input type="hidden" name="ministry" value="{{$form_data['ministry']}}">
            <input type="hidden" name="form_id" value="{{$form_data['form_id']}}">
            <input type="hidden" name="form_year" value="{{$form_data['form_year']}}">
            <div class="mt-4 item">
        <div class="header-item">
          <div style="text-align: right;">
            <h4>পরিশিষ্ট-৭</h4>
          </div>
          <div>
            <h6>বিষয়</h6>
          </div>
        </div>
        <div class="listed-content">
          <ul>
            <li><input type="text" name="budget_sub[]" id="" value="১২। আর্থিক প্রতিষ্ঠান বিভাগের ২০২০-২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো (MTBF) (বাংলা ও ইংরেজি) সংশোধন ও হালনাগাদকরণ। (বাৎসরিক)"></li>
            <li><input type="text" name="budget_sub[]" id="" value="১৩। আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থার ২০২০-২১ অর্থবছরের মধ্যমেয়াদি বাজেট কাঠামো (MTBF) (বাংলা ও ইংরেজি) সংশোধন ও হালনাগাদকরণ। (বাৎসরিক)"></li>
          </ul>
        </div>
        <div class="header-item">
          <div style="text-align: center;">
            <h4><input type="text" name="heading_financial_1[]" id="" value="১১২ - আর্থিক প্রতিষ্ঠান বিভাগ"></h4>
            <h4><input type="text" name="heading_financial_2[]" id="" value="মধ্যমেয়াদি ব্যয়"></h4>
          </div>
          <div style="text-align: right;">
            <h4><input type="text" name="amount[]" id="" value="(হাজার টাকায়)"></h4>
          </div>
        </div>
        <div class="listed-content">
          <table border="1" width="100%">
            <thead>
              <tr>
                <td rowspan="2">বিবরণ</td>
                <td rowspan="2">বাজেট {{$form_data['form_year']}}</td>
                <td colspan="2">প্রক্ষেপণ</td>
              </tr>
              <tr>
                <td>2020-21</td>
                <td>2021-22</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <input type="hidden" name="one_row_id" id="" value="1">
                <td><input type="text" name="description_one_1" id="" value="পরিচালন ব্যয়"></td>
                <td><input type="text" name="budget_one_1" id="" value="138,97,00"></td>
                <td><input type="text" name="projection1_one_1" id="" value="151,08,00"></td>
                <td><input type="text" name="projection2_one_1" id="" value="165,43,00"></td>
              </tr>
              <tr>
                <input type="hidden" name="one_row_id" id="" value="2">
                <td><input type="text" name="description_one_2" id="" value="উন্নয়ন ব্যয়"></td>
                <td><input type="text" name="budget_one_2" id="" value="2902,59,00"></td>
                <td><input type="text" name="projection1_one_2" id="" value="3178,34,00"></td>
                <td><input type="text" name="projection2_one_2" id="" value="3480,28,00"></td>
              </tr>
              <tr>
                <input type="hidden" name="one_row_id" id="" value="3">
                <td><input type="text" name="description_one_3" id="" value="মোট"></td>
                <td><input type="text" name="budget_one_3" id="" value="3041,56,00"></td>
                <td><input type="text" name="projection1_one_3" id="" value="3329,42,00"></td>
                <td><input type="text" name="projection2_one_3" id="" value="3645,71,00"></td>
              </tr>
              <tr>
                <td colspan="4"><input type="text" name="" id="4"></td>
              </tr>
              <tr>
                <input type="hidden" name="one_row_id" id="" value="5">
                <td><input type="text" name="description_one_4" id="" value="আবর্তক"></td>
                <td><input type="text" name="budget_one_4" id="" value="224,21,00"></td>
                <td><input type="text" name="projection1_one_4" id="" value="242,43,60"></td>
                <td><input type="text" name="projection2_one_4" id="" value="227,26,31"></td>
              </tr>
              <tr>
                <input type="hidden" name="one_row_id" id="" value="6">
                <td><input type="text" name="description_one_5" id="" value="মূলধন"></td>
                <td><input type="text" name="budget_one_5" id="" value="70,77,00"></td>
                <td><input type="text" name="projection1_one_5" id="" value="494,93,77"></td>
                <td><input type="text" name="projection2_one_5" id="" value="1324,33,04"></td>
              </tr>
              <tr>
                <input type="hidden" name="one_row_id" id="" value="7">
                <td><input type="text" name="description_one_6" id="" value="আর্থিক সম্পদ"></td>
                <td><input type="text" name="budget_one_6" id="" value="2746,58,00"></td>
                <td><input type="text" name="projection1_one_6" id="" value="2592,04,63"></td>
                <td><input type="text" name="projection2_one_6" id="" value="1324,33,04"></td>
              </tr>
              <tr>
                <input type="hidden" name="one_row_id" id="" value="8">
                <td><input type="text" name="description_one_7" id="" value="দায়"></td>
                <td><input type="text" name="budget_one_7" id="" value="0"></td>
                <td><input type="text" name="projection_tab11_7" id="" value="0"></td>
                <td><input type="text" name="projection2_one_7" id="" value="0"></td>
              </tr>
              <tr>
                <input type="hidden" name="one_row_id" id="" value="9">
                <td><input type="text" name="description_one_8" id="" value="মোট"></td>
                <td><input type="text" name="budget_one_8" id="" value="3041,56,00"></td>
                <td><input type="text" name="projection1_one_8" id="" value="3329,42,00"></td>
                <td><input type="text" name="projection2_one_8" id="" value="3645,71,00"></td>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="listed-content">
          <ul>
            <li><input type="text" name="point_1_0[]" id="" value="১.০	মিশন স্টেটমেন্ট ও প্রধান কার্যাবলি"></li>
            <li>
              <input type="text" name="point_1_1[]" id="" value="১.১	মিশন স্টেটমেন্ট">
              <ul>
                <li><input type="text" name="point_1_1_line[]" id="" value="নীতিগত ও প্রাতিষ্ঠানিক কাঠামো শক্তিশালী করার মাধ্যমে অন্তর্ভুক্তিমূলক আর্থিক বাজার সৃষ্টি ও সেবা ব্যবস্থার মানোন্নয়ন।"></li>
              </ul>
            </li>
            <li><input type="text" name="point_1_2[]" id="" value="১.২	প্রধান কার্যাবলি">
              <ul>
                <li><input type="text" name="point_1_2_lines[]" id="" value="১.২.১। ব্যাংক, বীমা, পুঁজিবাজার ও অন্যান্য আর্থিক প্রতিষ্ঠান ও সংশ্লিষ্ট সেবা সম্পর্কিত আইন, বিধি, প্রবিধি, নীতি প্রণয়ন ও সংশোধন"></li>
                <li><input type="text" name="point_1_2_lines[]" id="" value="১.২.২। কার্যপদ্ধতি, কর্মপরিবেশ ও সেবার মানোন্নয়ন"></li>
                <li><input type="text" name="point_1_2_lines[]" id="" value="১.২.৩। প্রাতিষ্ঠানিক কাঠামো শক্তিশালীকরণের মাধ্যমে আর্থিক বাজার ও প্রতিষ্ঠান উন্নয়ন"></li>
                <li><input type="text" name="point_1_2_lines[]" id="" value="১.২.৪। আর্থিক খাতের নিয়ন্ত্রক প্রতিষ্ঠানসমূহের কাজের সমন্বয় সাধন"></li>
                <li><input type="text" name="point_1_2_lines[]" id="" value="১.২.৫। রাষ্ট্রমালিকানাধীন ব্যাংক ও আর্থিক প্রতিষ্ঠানের কার্যক্রমের সামগ্রিক পরিবীক্ষণ ও মূল্যায়ন"></li>
                <li><input type="text" name="point_1_2_lines[]" id="" value="১.২.৬। পুঁজিবাজারে নতুন প্রোডাক্ট প্রচলনের মাধ্যমে বাজার সম্প্রসারণ ও উত্তম মৌলভিত্তিসম্পন্ন সিকিউরিটিজ সরবরাহ"></li>
                <li><input type="text" name="point_1_2_lines[]" id="" value="১.২.৭। 'বঙ্গবন্ধু শিক্ষা বীমা' বাস্তবায়ন, বীমা দাবী নিষ্পত্তির হার বৃদ্ধি এবং বীমা বিষয়ে প্রশিক্ষণ প্রদান কার্যক্রম পরিচালনা"></li>
                <li><input type="text" name="point_1_2_lines[]" id="" value="১.২.৮। ক্ষুদ্রঋণ কার্যক্রম সম্প্রসারণের মাধ্যমে আত্মকর্মসংস্থান সৃষ্টি ও দারিদ্র বিমোচন"></li>
              </ul>
            </li>
            <li><input type="text" name="point_2_0[]" id="" value="২.০ মধ্যমেয়াদি কৌশলগত উদ্দেশ্য ও কার্যক্রমসমূহ">
              <ul>
                <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <td>মধ্যমেয়াদি কৌশলগত উদ্দেশ্য</td>
                                    <td>কার্যক্রমসমূহ</td>
                                    <td>বাস্তবায়নকারী অধিদপ্তর/সংস্থা</td>
                                </tr>
                                <tr>
                                    <td>১</td>
                                    <td>২</td>
                                    <td>৩</td>
                                </tr>

                                <tr>
                                  <input type="hidden" name="two_row_id" value="1">
                                    <td><input type="text" name="purpose_two_1" id="" value="১.	প্রাতিষ্ঠানিক কাঠামো শক্তিশালীকরণ"></td>
                                    <td><input type="text" name="activities_two_1" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা সম্পর্কিত আইন, বিধি ও নীতিমালা প্রণয়ন ও সংশোধন;"></td>
                                    <td><input type="text" name="agency_two_1" id="" value="সচিবালয়"></td>
                                </tr>
                                <tr>
                                  <input type="hidden" name="two_row_id" value="2">
                                    <td><input type="text" name="purpose_two_2" id="" value="২. ব্যাংক ও নন-ব্যাংক আর্থিক প্রতিষ্ঠানসমূহে পেশাদারিত্ব এবং আর্থিক অন্তর্ভুক্তি বৃদ্ধি"></td>
                                    <td>
                                    <textarea name="activities_two_2" id="" cols="30" rows="10">
                                      •	রাষ্ট্র মালিকানাধীন বাণিজ্যিক ব্যাংকসমূহের শ্রেণিকৃত ঋণ হ্রাসকরণ
                                      •	কৃষি খাতে ঋণ প্রদান তত্ত্বাবধান
                                      •	এসএমই খাতে ঋণ প্রদান তত্ত্বাবধান
                                      •	মোবাইল ব্যাংকিং কার্যক্রম সম্প্রসারণ
                                    </textarea>
                                    </td>
                                    <td>
                                      <textarea name="agency_two_2" id="" cols="30" rows="10">
                                        বাংলাদেশ ব্যাংক
                                      </textarea>
                                    </td>
                                </tr>
                                <tr>
                                  <input type="hidden" name="two_row_id" value="3">
                                    <td rowspan="2"><input type="text" name="purpose_two_3" id="" value="৩. পুঁজিবাজারের কার্যকারিতা বৃদ্ধিকরণ"></td>
                                    <td>
                                    <textarea name="activities_two_3" id="" cols="30" rows="10">
                                      •	পুঁজিবাজারে নতুন বিনিয়োগ বৃদ্ধি
                                      •	পুঁজিবাজারে তালিকাভুক্ত কোম্পানি বৃদ্ধি
                                      •	মূলধন উত্তোলনের লক্ষ্যে আইপিও/ আরপিও/রাইট/ ডেট সিকিউরিটিজ ইস্যুকরণ
                                      •	দেশব্যাপি ফাইন্যান্সিয়াল লিটারেসি ও বিনিয়োগকারীগণের প্রশিক্ষণ প্রদান 
                                    </textarea>
                                      
                                    </td>
                                    <td>
                                      <textarea name="agency_two_3" id="" cols="30" rows="10">
                                        •	বাংলাদেশ সিকিউরিটিজ আ্যান্ড এক্সচেঞ্জ কমিশন
                                      </textarea>
                                    </td>
                                </tr>
                                <tr>
                                  <input type="hidden" name="two_row_id_3_1" value="3">
                                    <td>
                                    <textarea name="activities_two_3_1" id="" cols="30" rows="10">
                                        •	পুঁজিবাজারে বিনিয়োগকারীদের জন্য প্রশিক্ষণ
                                        •	পোস্ট গ্র্যাজুয়েট ডিপ্লোমা এবং সার্টিফিকেট কোর্স অন ক্যাপিটাল মার্কেট প্রোগ্রাম আয়োজন
                                    </textarea>
                                    </td>
                                    <td>
                                      <textarea name="agency3_1" id="" cols="30" rows="10">
                                        •	বাংলাদেশ ইন্‌স্টিটিউট অব ক্যাপিটাল মার্কেট
                                      </textarea>
                                    </td>
                                </tr>
                                <tr>
                                  <input type="hidden" name="two_row_id" value="4">
                                  <td rowspan="2"><input type="text" name="purpose_two_4" id="" value="৪.	বীমা খাতের অন্তর্ভুক্তি বৃদ্ধি, প্রশিক্ষিত জনবল সৃষ্টি এবং বীমা সম্পর্কে ব্যাপক জনসচেতনতা সৃষ্টি"></td>
                                  <td>
                                    <textarea name="activities_two_4" id="" cols="30" rows="10">
                                        •	বীমা বিষয়ক বিধিমালা/প্রবিধানমালা প্রণয়ন
                                        •	বীমা দাবী নিষ্পত্তির হার বৃদ্ধি
                                        •	বীমা বিষয়ে জনসচেতনতা বৃদ্ধি।
                                    </textarea>
                                  </td>
                                  <td>
                                    <textarea name="agency_two_4" id="" cols="30" rows="10">
                                      •	বীমা উন্নয়ন ও নিয়ন্ত্রণ কর্তৃপক্ষ
                                    </textarea>
                                  </td>
                              </tr>
                              <tr>
                                <input type="hidden" name="two_row_id_4_1" value="4">
                                <td>
                                  <input type="text" name="activities_two_4_1" id="" value="•	বীমা বিষয়ে প্রশিক্ষণ প্রদান।">
                                </td>
                                <td>
                                  <textarea name="agency_two_4_1" id="" cols="30" rows="10">
                                    •	বাংলাদেশ ইনসিওরেন্স একাডেমি
                                  </textarea>
                                </td>
                              </tr>
                              <tr>
                                <input type="hidden" name="two_row_id_5" value="5">
                                <td><input type="text" name="purpose_two_5" id="" value="৫.	সুনিয়ন্ত্রিত ক্ষুদ্রঋণ কার্যক্রম সম্প্রসারণ ও পরিচালনায় সহায়তা জোরদার"></td>
                                <td>
                                <textarea name="activities_two_5" id="" cols="30" rows="10">
                                    •	ক্ষুদ্রঋণ বিতরণ ও আদায়
                                    •	এমএফআই সুবিধাভোগীদের সংখ্যা বৃদ্ধি
                                  </textarea>
                                
                                </td>
                                <td>
                                  <textarea name="agency_two_5" id="" cols="30" rows="10">
                                    •	মাইক্রোক্রেডিট রেগুলেটরি অথরিটি
                                  </textarea>
                                </td>
                             </tr>
                                
                            </thead>
                        </table>

              </ul>
            </li>
            <li><input type="text" name="point_3_0[]" id="" value="৩.০	দারিদ্র্য নিরসন ও নারী উন্নয়ন সংক্রান্ত তথ্য"></li>
            <li>
              <input type="text" name="point_3_1[]" id="" value="৩.১	দারিদ্র্য নিরসন ও নারী উন্নয়নের উপর মধ্যমেয়াদি কৌশলগত উদ্দেশ্যসমূহের প্রভাব">
              <ul>
                <li><input type="text" name="point_3_1_1[]" id="" value="৩.১.১ প্রাতিষ্ঠানিক কাঠামো শক্তিশালীকরণ">
                  <ul>
                    <li><input type="text" name="point_3_1_1_lines[]" id="" value="দারিদ্র্য নিরসনের উপর প্রভাব: দেশের ব্যাংক ও নন ব্যাংক প্রতিষ্ঠান এবং এ বিভাগের আওতাধীন দপ্তর/সংস্থা সম্পর্কিত আইন, বিধি ও নীতিমালা প্রণয়ন ও সংশোধন নিশ্চিত হলে দারিদ্র্য নিরসনে সহায়ক হবে।"></li>
                    <li><input type="text" name="point_3_1_1_lines[]" id="" value="নারী উন্নয়নের উপর প্রভাব:  আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা সম্পর্কিত আইন, বিধি ও নীতিমালা প্রণয়নের ফলে নারী উদ্যোক্তারা অধিকতর সুযোগ লাভ করবে, ফলে নারীদের নতুন নতুন কর্মসংস্থানের সুযোগ সৃষ্টি হবে।"></li>
                  </ul>
                </li>
                <li><input type="text" name="point_3_1_2[]" id="" value="৩.১.২	ব্যাংক ও নন-ব্যাংক আর্থিক প্রতিষ্ঠানসমূহে পেশাদারিত্ব এবং আর্থিক অন্তর্ভুক্তি বৃদ্ধি">
                  <ul>
                    <li><input type="text" name="point_3_1_2_lines[]" id="" value="দারিদ্র্য নিরসনের উপর প্রভাব: দেশের ব্যাপক জনগোষ্ঠীকে ব্যাংকিং সেবার আওতায় আনা সম্ভব হবে। ফলে অর্থনৈতিক কর্মকাণ্ডে অধিক সংখ্যক জনগোষ্ঠীর অংশগ্রহণ নিশ্চিত হবে, যা তাদের দারিদ্র্য নিরসনে সহায়ক হবে।"></li>
                    <li><input type="text" name="point_3_1_2_lines[]" id="" value="নারী উন্নয়নের উপর প্রভাব: ব্যাংকিং খাত সম্প্রসারণের ফলে নারী উদ্যোক্তারা অধিকতর ব্যাংকিং সেবার সুযোগ লাভ করবে, ফলে নারীদের নতুন নতুন কর্মসংস্থানের সুযোগ সৃষ্টি হবে।"></li>
                  </ul>
                </li>
                <li><input type="text" name="point_3_1_3[]" id="" value="৩.১.৩	পুঁজিবাজারের কার্যকারিতা বৃদ্ধিকরণ:">
                  <ul>
                    <li><input type="text" name="point_3_1_3_lines[]" id="" value="দারিদ্র্য নিরসনের উপর প্রভাব: পুঁজিবাজার সুশৃঙ্খল ও শক্তিশালী হলে মূলধন প্রাপ্তি সহজলভ্য হবে এবং দেশে নতুন নতুন শিল্প কারখানা স্থাপিত হবে। উক্ত শিল্প কারখানাসমূহে কর্মসংস্থানের সৃষ্টি হবে, যার ফলশ্রুতিতে দারিদ্র্য নিরসনের গতি ত্বরান্বিত হবে।"></li>
                    <li><input type="text" name="point_3_1_3_lines[]" id="" value="নারী উন্নয়নের উপর প্রভাব: পুঁজি বাজার কার্যকর হলে শিল্পায়নের প্রক্রিয়া ত্বরান্বিত হবে, যার ফলে নারীদের অধিকতর কর্মসংস্থানের সুযোগ সৃষ্টি হবে।"></li>
                  </ul>
                </li>
                <li><input type="text" name="point_3_1_4[]" id="" value="৩.১.৪	বীমা খাতে অন্তর্ভুক্তি বৃদ্ধি ও শৃঙ্খলা সুসংহতকরণ:">
                  <ul>
                    <li><input type="text" name="point_3_1_4_lines[]" id="" value="দারিদ্র্য নিরসনের উপর প্রভাব: বীমাখাতের প্রসারের ফলে অর্থনৈতিক প্রবৃদ্ধি ও কর্মসংস্থানের সুযোগ সৃষ্টির মাধ্যমে দারিদ্র্য বিমোচন সম্ভব হবে।"></li>
                    <li><input type="text" name="point_3_1_4_lines[]" id="" value="নারী উন্নয়নের উপর প্রভাব: বীমা খাতের আওতা প্রসারিত হলে অধিক সংখ্যক নারীর আর্থিক নিরাপত্তা বৃদ্ধি পাবে ও কর্মসংস্থানের সুযোগ সৃষ্টি হবে, যা নারী সমাজের দারিদ্র্য নিরসনে সহায়ক হবে।"></li>
                  </ul>
                </li>
                <li><input type="text" name="point_3_1_5[]" id="" value="৩.১.৫	সুনিয়ন্ত্রিত ক্ষুদ্রঋণ কার্যক্রম সম্প্রসারণ ও পরিচালনায় সহায়তা জোরদার:">
                  <ul>
                    <li><input type="text" name="point_3_1_5_lines[]" id="" value="দারিদ্র্য নিরসনের উপর প্রভাব: তৃণমূল পর্যায়ে বিভিন্ন ধরনের উদ্যোক্তা সৃষ্টি ও আর্থিক বিকাশ সাধনে গৃহীত কার্যক্রম ও প্রশিক্ষণ এবং আত্ম-কর্মসংস্থান সৃষ্টির লক্ষ্যে প্রদত্ত ক্ষুদ্রঋণ কার্যক্রমের মাধ্যমে দারিদ্র্য বিমোচন ত্বরান্বিত হবে।"></li>
                    <li><input type="text" name="point_3_1_5_lines[]" id="" value="নারী উন্নয়নের উপর প্রভাব: বিভিন্ন ধরনের কারিগরি, বৃত্তিমূলক, আয়বর্ধক কার্যক্রম ও প্রশিক্ষণ নারী সমাজের সামাজিক ও আর্থিক উন্নয়নে সহায়তা করবে।"></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><input type="text" name="point_3_2[]" id="" value="৩.২	দারিদ্র্য নিরসন ও নারী উন্নয়ন সম্পর্কিত বরাদ্দ">
              <ul>
                <table border="1" width="100%">
                  <thead>
                    <tr>
                      <td rowspan="2">বিবরণ</td>
                      <td rowspan="2">বাজেট <br> ২০১9-20</td>
                      <td colspan="2">প্রক্ষেপণ</td>
                    </tr>
                    <tr>
                      <td>2020-2021</td>
                      <td>২021-2022</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <input type="hidden" name="three_row_id" value="1" id="">
                      <td><input type="text" name="description_three_1" id="" value="দারিদ্র্র্য নিরসন"></td>
                      <td><input type="text" name="budget_three_1" id="" value=""></td>
                      <td><input type="text" name="projection1_three_1" id="" value=""></td>
                      <td><input type="text" name="projection2_three_1" id="" value=""></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="three_row_id" value="2" id="">
                      <td><input type="text" name="description_three_2" id="" value="নারী উন্নয়ন"></td>
                      <td><input type="text" name="budget_three_2" id="" value=""></td>
                      <td><input type="text" name="projection1_three_2" id="" value=""></td>
                      <td><input type="text" name="projection2_three_2" id="" value=""></td>
                    </tr>
                  </tbody>
                </table>
              </ul>
            </li>
            <li><input type="text" name="point_4_1[]" id="" value="৪.১	অগ্রাধিকার ব্যয়খাত/কর্মসূচিসমূহ (Priority Spending Areas/Programmes)">
              <ul>
                <table border="1" width="100%">
                  <thead>
                    <tr>
                      <td>অগ্রাধিকার ব্যয় খাত/কর্মসূচিসমূহ</td>
                      <td>সংশ্লিষ্ট মধ্যমেয়াদি কৌশলগত উদ্দেশ্য</td>
                    </tr>
                    <tr>
                      <input type="hidden" name="four_row_id" value="1">
                      <td width="50%">
                        <textarea name="priority_expenditure_1" id="" cols="100" rows="12">
                                        ১.	প্রাতিষ্ঠানিক কাঠামো শক্তিশালীকরণ
                                        ব্যাংকগুলোর ঋণ ব্যবস্থাপনা, অভ্যন্তরীণ নিরীক্ষা, হিসাব, ঝুঁকি ব্যবস্থাপনা, মানব সম্পদ উন্নয়ন, তহবিল ব্যবস্থাপনা, শাখা ব্যবস্থাপনা এবং অটোমেশন সংক্রান্ত চলমান সংস্কার কাজে প্রয়োজনীয় সহায়তা প্রদান করা হচ্ছে। এর মাধ্যমে ব্যাংকিং খাতের দক্ষতা, স্বচ্ছতা ও জবাবদিহিতা নিশ্চিতকরণ সম্ভব হবে বিধায় এ খাতকে সর্বোচ্চ অগ্রাধিকার দেয়া হয়েছে। এছাড়া কৃষিঋণ বিতরণ, এজেন্ট/মোবাইল ব্যাংকিং, স্কুল ব্যাংকিং কার্যক্রমের মাধ্যমে আর্থিক অন্তর্ভুক্তি বৃদ্ধির উদ্যোগ নেয়া হয়েছে। আর্থিক খাতের সংস্কারমূলক পদক্ষেপ হিসেবে রাষ্ট্রমালিকানাধীন ব্যাংকের পরিচালনা পর্ষদ পুনর্গঠন করা হয়েছে। সময়ের চাহিদার পরিপ্রেক্ষিতে রাষ্ট্রমালিকানাধীন ব্যাংক ও আর্থিক প্রতিষ্ঠানের মূলধন বৃদ্ধি (Capitalization) এবং মূলধন ঘাটতি পুনর্ভরণ (Re-capitalization) এর উদ্যোগ গ্রহণ করা হয়েছে। কোম্পানি আইন-1994 সংশোধন, শেয়ার বাজারে বাণিজ্যিক ব্যাংকসমূহের শেয়ার হোল্ডিং সীমিতকরণ, ব্যাংকগুলোর সাথে সরকারের বার্ষিক কর্মসম্পাদন চুক্তি স্বাক্ষর এবং বাংলাদেশ ব্যাংকের সাথে রাষ্ট্রমালিকানাধীন বাণিজ্যিক ব্যাংকগুলোর ইতঃপূর্বে সম্পাদিত  সমঝোতা স্মারক (MOU) সংশোধন করা হয়েছে।
                                      </textarea>
                      </td>
                      <td width="50%"> <input type="text" name="corresponding_objectives_1" id="" value="আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা সম্পর্কিত আইন, বিধি ও নীতিমালা প্রণয়ন ও সংশোধন;"></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="four_row_id" value="2">
                      <td width="50%">
                        <textarea name="priority_expenditure_2" id="" cols="100" rows="12">
                                        ২. ব্যাংক ও নন-ব্যাংক আর্থিক প্রতিষ্ঠানসমূহে পেশাদারিত্ব এবং আর্থিক অন্তর্ভুক্তি বৃদ্ধি 
                                        ব্যাংকিং ও আর্থিক খাতের প্রাতিষ্ঠানিক কার্যক্রমের মূলধারায় সামাজিক দায়বোধ দৃঢ়ভাবে সুপ্রোথিত করার উদ্যোগ জোরদার করা হয়।আর্থিক অন্তর্ভুক্তির অংশ হিসেবে গরিব কৃষকদের ১০ টাকায় ব্যাংক হিসাব খোলার সুযোগ করে দেয়া হয়। এ প্রক্রিয়ায় সরকারের বিভিন্ন সামাজিক নিরাপত্তা কর্মসূচির অর্থ বিতরণ, অসহায় মুক্তিযোদ্ধা, ক্ষুদ্র জীবন বীমাগ্রহীতা, বেকার তরুণ, পরিচ্ছন্নতাকর্মী, গার্মেন্ট শ্রমিক, এমনকি কর্মজীবী পথশিশুরাও ব্যাংক হিসাব খুলতে পারছে। এরই মধ্যে ৯৭ লাখ কৃষকসহ ১ কোটি ৩৩ লাখ সাধারণ মানুষ নতুন হিসাব খুলে ব্যাংকিং সেবা নিতে পারছে। আর্থিক অন্তর্ভুক্তি ত্বরান্বিত করার পথে অন্যতম গুরুত্বপূর্ণ
                                        পদক্ষেপ হলো ‘স্কুল ব্যাংকিং’। এটি শিক্ষার্থী ও অভিভাবকদের মধ্যে ব্যাপক সাড়া ফেলেছে। গত চার বছরে ৪৮টি ব্যাংকে ৩ লাখ ৬৬ হাজার স্কুল ছাত্রছাত্রী ব্যাংক হিসাব খুলেছে। সে হিসাবে জমার পরিমাণ দাঁড়িয়েছে ৩৭১ কোটি টাকা। আর্থিক অন্তর্ভুক্তির অভিযানকে আরেক ধাপ এগিয়ে নিতে এজেন্ট ব্যাংকিং নীতিমালা প্রণয়ন করেছে বাংলাদেশে ব্যাংক। এজেন্টের মাধ্যমে ব্যাংকগুলো তাদের কিছু কিছু ব্যাংকিং সেবা যেমন বৈদেশিক রেমিট্যান্স বিতরণসহ স্বল্প পরিমাণের অর্থ জমা ও উত্তোলন, ব্যাংক হিসাব খোলার কাগজপত্রাদি বিতরণ ও সংগ্রহ, ছোট আকারের ঋণ বিতরণ ইত্যাদি কার্যক্রম প্রত্যন্ত অঞ্চলের জনপদে পৌঁছে দিতে পারবে।

                                      </textarea>
                      </td>
                      <td width="50%"> <input type="text" name="corresponding_objectives_2" id="" value="•	আর্থিক প্রতিষ্ঠানসমূহে পেশাদারিত্ব এবং আর্থিক অন্তর্ভুক্তি বৃদ্ধি"></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="four_row_id" value="3">
                      <td width="50%">
                        <textarea name="priority_expenditure_3" id="" cols="100" rows="12">
                                        ৩.	অধিকতর কার্যকর পুঁজিবাজার প্রতিষ্ঠা
                                        বিনিয়োগকারীদের স্বার্থ সংরক্ষণের জন্য পুঁজিবাজারের স্টক ব্রোকার ও সাব-ব্রোকার, শেয়ার হস্তান্তরকারী প্রতিনিধি, ইস্যু ব্যাংকার, মার্চেন্ট ব্যাংকার, ইস্যু নিবন্ধক ও ম্যানেজার, অবলিখক, পোর্টফলিও ম্যানেজার, বিনিয়োগ উপদেষ্টা এবং পুঁজিবাজারের সংগে সম্পৃক্ত অন্যান্য প্রতিষ্ঠানের কার্যকর সমন্বয়ের জন্য যথাযথ আইনী কাঠামো তৈরির পদক্ষেপ গ্রহণ করা হচ্ছে। এ খাতে দক্ষ জনবল তৈরির লক্ষ্যে বাংলাদেশ ইন্‌স্টিটিউট অব ক্যাপিটাল মার্কেট গঠন করা হয়েছে। পুঁজি বাজার সংশ্লিষ্ট দক্ষ জনগোষ্ঠি তৈরির লক্ষ্যে উন্নততর ও মানসম্মত প্রশিক্ষণ ব্যবস্থা গড়ে তোলার জন্য এ প্রতিষ্ঠানকে আধুনিকায়ন ও সম্প্রসারণ করার উদ্যোগ নেয়া হয়েছে। ইতোমধ্যে পুঁজিবাজার নিয়ন্ত্রক সংস্থা বিএসইসি-কে শক্তিশালী করার জন্য জনবল ও অন্যান্য সরঞ্জাম বৃদ্ধি করা হয়েছে। পুঁজিবাজারে ক্ষতিগ্রস্ত ক্ষুদ্র বিনিয়োগকারীদের সহায়তার লক্ষ্যে পুনঃঅর্থায়ন কার্যক্রম চলছে বিধায় এ খাতকে তৃতীয় অগ্রাধিকার খাত হিসেবে অন্তর্ভুক্ত করা হয়েছে।
                                        
                                      </textarea>
                      </td>
                      <td width="50%"> <input type="text" name="corresponding_objectives_3" id="" value="•	পুঁজিবাজারের কার্যকারিতা বৃদ্ধিকরণ।"></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="four_row_id" value="4">
                      <td width="50%">
                        <textarea name="priority_expenditure_4" id="" cols="100" rows="12">
                                        ৪. বীমা খাতে অন্তর্ভুক্তি বৃদ্ধি ও শৃঙ্খলা সুসংহতকরণ
                                        বীমা শিল্প ব্যবসার তত্ত্বাবধান, বীমা পলিসি গ্রাহক ও পলিসির অধীনে উপকারভোগীদের স্বার্থ সংরক্ষণ এবং বীমা শিল্পের নিয়মতান্ত্রিক উন্নয়ন ও নিয়ন্ত্রণের লক্ষ্যে বিভিন্ন উদ্যোগ গ্রহণ করা হচ্ছে। বীমা উন্নয়ন ও নিয়ন্ত্রণ কর্তৃপক্ষ আইন, ২০১০ এর আওতায় উক্ত কর্তৃপক্ষ কার্যক্রম শুরু করেছে। আইসিটি’র ব্যবহার বৃদ্ধি এবং সংস্কারের মাধ্যমে বীমা খাতের উপর জনগণের আস্থা বৃদ্ধির উদ্যোগ গ্রহণ করা হয়েছে। বীমা পেশায় প্রশিক্ষিত ও পেশাদার জনবল গড়ে তোলার উদ্দেশ্য বাংলাদেশ ইনসিওরেন্স একাডেমির মাধ্যমে এ পেশার সাথে জড়িতদের নিয়মিত প্রশিক্ষণ প্রদান করা হচ্ছে। বীমা ক্ষেত্রে প্রশিক্ষণের পরিমাণ ও মান বৃদ্ধির জন্য এবং এটিকে আন্তর্জাতিক মানের প্রশিক্ষণ প্রতিষ্ঠান হিসেবে গড়ে তোলার উদ্দেশ্যে এর অবকাঠামো ও একাডেমিক কার্যক্রম সম্প্রসারণের পদক্ষেপ গ্রহণ করা হয়েছে।বীমা শিল্পের গুরুত্ব বিবেচনায় এ খাতকে চতুর্থ অগ্রাধিকার খাত হিসেবে অন্তর্ভুক্ত করা হয়েছে।
                                        
                                      </textarea>
                      </td>
                      <td width="50%"> <input type="text" name="corresponding_objectives_4" id="" value="•	বীমা খাতে অন্তর্ভুক্তি বৃদ্ধি ও শৃঙ্খলা সুসংহতকরণ।"></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="four_row_id" value="5">
                      <td width="50%">
                        <textarea name="priority_expenditure_5" id="" cols="100" rows="12">
                                        ৫. 	উদ্যোক্তা সৃষ্টির মাধ্যমে কর্মসংস্থান এবং আর্থিক সহায়তা প্রদান
                                        মাইক্রোক্রেডিট রেগুলেটরি অথরিটি (এমআরএ), পল্লী কর্ম সহায়ক ফাউন্ডেশন (পিকেএসএফ), সোস্যাল ডেভেলপমেন্ট ফাউন্ডেশন (এসডিএফ), বাংলাদেশ এনজিও ফাউন্ডেশন (বিএনএফ), বাংলাদেশ মিউনিসিপ্যাল ডেভেলপমেন্ট ফান্ড (বিএমডিএফ), ইকুইুট এন্টারপেনরশিপ ফান্ড (ইইএফ), স্মল এন্টারপ্রাইজ ফান্ড (এসইএফ) এর তত্ত্বাবধানে/আওতায় ক্ষুদ্র উদ্যোক্তা সৃষ্টি ও উন্নয়ন, কৃষিভিত্তিক শিল্প এবং তথ্য যোগাযোগ প্রযুক্তি (ICT) খাতে বিনিয়োগের মাধ্যমে গৃহীত বিভিন্ন কার্যক্রমের ফলে দেশের প্রত্যন্ত অঞ্চলে ব্যাপক হারে উদ্যোক্তা ও কর্মসংস্থান সৃষ্টি হচ্ছে।
                                        ক্ষুদ্রঋণ কার্যক্রমে দরিদ্র জনগোষ্ঠীর জন্য সামাজিক ও অবকাঠামোগত সুবিধা সৃষ্টি এবং অতি দরিদ্র, বিশেষত যুবমহিলাদের এতে অগ্রাধিকার দেয়া হচ্ছে। ক্ষুদ্রঋণ খাতকে পঞ্চম অগ্রাধিকার কর্মসূচি হিসেবে চিহ্নিত করা হয়েছে।
                                        
                                      </textarea>
                      </td>
                      <td width="50%"> <input type="text" name="corresponding_objectives_5" id="" value="•	সুনিয়ন্ত্রিত ক্ষুদ্রঋণ কার্যক্রম সম্প্রসারণ ও পরিচালনায় সহায়তা জোরদার।"></td>
                    </tr>
                  </thead>
                </table>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_4_2[]" id="" value="৪.২	মধ্যমেয়াদি ব্যয় প্রাক্কলন ও প্রক্ষেপণ (২০১9-20 হতে ২০২1-২2) ">
              <ul>
                <li><input type="text" name="point_4_2_1[]" id="" value="৪.২.১ দপ্তর/সংস্থা/প্রাতিষ্ঠানিক ইউনিটওয়ারী ব্যয়">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">বিবরণ</td>
                          <td>বাজেট</td>
                          <td>সংশোধিত বাজেট</td>
                          <td rowspan="2">বাজেট ২০১9-20</td>
                          <td colspan="2">প্রক্ষেপণ</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-19</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="five_row_id" id="" value="1">
                        <td><input type="text" name="description_five_1" id="" value=""></td>
                        <td><input type="text" name="budget_five_1" id="" value=""></td>
                        <td><input type="text" name="revised_budget_five_1" id="" value=""></td>
                        <td><input type="text" name="budget2_five_1" id="" value=""></td>
                        <td><input type="text" name="projection1_five_1" id="" value=""></td>
                        <td><input type="text" name="projection2_five_1" id="" value=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
              <ul>
                <li><input type="text" name="point_4_2_2[]" id="" value="৪.২.২	অর্থনৈতিক গ্রুপ কোড অনুযায়ী ব্যয়">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">অর্থনৈতিক গ্রুপ কোড</td>
                          <td rowspan="2">বিবরণ</td>
                          <td>বাজেট</td>
                          <td>সংশোধিত বাজেট</td>
                          <td rowspan="2">বাজেট ২০১9-20</td>
                          <td colspan="2">প্রক্ষেপণ</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-19</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          <input type="hidden" name="six_row_id" id="" value="1">

                        <td><input type="text" name="ecconomic_group_code_1" id="" value=""></td>
                        <td><input type="text" name="description_six_1" id="" value=""></td>
                        <td><input type="text" name="budget_six_1" id="" value=""></td>
                        <td><input type="text" name="revised_budget_six_1" id="" value=""></td>
                        <td><input type="text" name="budget2_six_1" id="" value=""></td>
                        <td><input type="text" name="projection1_six_1" id="" value=""></td>
                        <td><input type="text" name="projection2_six_1" id="" value=""></td>
                        </tr>


                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_5_0[]" id="" value="৫.০	মন্ত্রণালয়/বিভাগের প্রধান কর্মকৃতি নির্দেশকসমূহ (Key Performance Indicators)">
              <ul>
                <table border="1" width="100%">
                  <thead>
                    <tr>
                      <td rowspan="2">নির্দেশক</td>
                      <td rowspan="2">সংশ্লিষ্ট
                        কৌশলগত উদ্দেশ্য
                      </td>
                      <td rowspan="2">পরিমাপের একক
                      </td>
                      <td>সংশোধিত লক্ষ্যমাত্রা</td>
                      <td>প্রকৃত
                        অর্জন
                      </td>
                      <td>লক্ষ্যমাত্রা</td>
                      <td>সংশোধিত লক্ষ্যমাত্রা
                      </td>
                      <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                    </tr>
                    <tr>
                      <td colspan="2">২০১7-১8</td>
                      <td colspan="2">২০১8-১9</td>
                      <td>2019-2020</td>
                      <td>2020-2021</td>
                      <td>2021-2022</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <input type="hidden" name="seven_row_id" value="1">
                      <td>
                        <textarea name="indicative_1" id="" cols="30" rows="10">
                                      ব্যাংকিং খাতে আর্থিক অন্তর্ভুক্তি বৃদ্ধি (প্রাপ্ত বয়স্ক জনগণের অংশগ্রহণের হার)
                                    </textarea>
                      </td>
                      <td><input type="text" name="related_strategic_objectives	_1" id="" value="১"></td>
                      <td><input type="text" name="unit_measurement_1" id="" value="%"></td>
                      <td><input type="text" name="revised_goals_1" id="" value="81"></td>
                      <td><input type="text" name="actual_achievement_1" id="" value="80"></td>
                      <td><input type="text" name="goals_1" id="" value="82"></td>
                      <td><input type="text" name="revised_goals_two_1" id="" value="82"></td>
                      <td><input type="text" name="medium_term_targets_1" id="" value="৮২"></td>
                      <td><input type="text" name="medium_term_targets1_1" id="" value="৮৩"></td>
                      <td><input type="text" name="medium_term_targets2_1" id="" value="৮৪"></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="seven_row_id" value="2">
                      <td>
                        <textarea name="indicative_2" id="" cols="30" rows="10">
                                    রাষ্ট্রমালিকানাধীন বাণিজ্যিক ব্যাংকসমূহের শ্রেণীকৃত ঋণের (Classified Loan) হার
                                    </textarea>
                      </td>
                      <td><input type="text" name="related_strategic_objectives	_2" id="" value="২"></td>
                      <td><input type="text" name="unit_measurement_2" id="" value="%"></td>
                      <td><input type="text" name="revised_goals_2" id="" value="21"></td>
                      <td><input type="text" name="actual_achievement_2" id="" value="26.5"></td>
                      <td><input type="text" name="goals_2" id="" value="24.5"></td>
                      <td><input type="text" name="revised_goals_2_2" id="" value="24.5"></td>
                      <td><input type="text" name="medium_term_targets_2" id="" value="৩০"></td>
                      <td><input type="text" name="medium_term_targets1_2" id="" value="২৮"></td>
                      <td><input type="text" name="medium_term_targets2_1" id="" value="২৬"></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="seven_row_id" value="3">
                      <td>
                        <textarea name="indicative_3" id="" cols="30" rows="10">
                                    পুজিঁবাজারে তালিকাভুক্ত কোম্পানির হার বৃদ্ধি
                                    </textarea>
                      </td>
                      <td><input type="text" name="related_strategic_objectives	_3" id="" value="৩"></td>
                      <td><input type="text" name="unit_measurement_3" id="" value="%"></td>
                      <td><input type="text" name="revised_goals_3" id="" value="4"></td>
                      <td><input type="text" name="actual_achievement_3" id="" value="4"></td>
                      <td><input type="text" name="goals_3" id="" value="4.5"></td>
                      <td><input type="text" name="revised_goals_3_3" id="" value="4.75"></td>
                      <td><input type="text" name="medium_term_targets_3" id="" value="৪.৭৫"></td>
                      <td><input type="text" name="medium_term_targets1_3" id="" value="৫"></td>
                      <td><input type="text" name="medium_term_targets2_3" id="" value="৫.২৫"></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="seven_row_id" value="4">
                      <td>
                        <textarea name="indicative_4" id="" cols="30" rows="10">
                                      বীমা পলিসি গ্রাহক সংখ্যা বৃদ্ধি
                                    </textarea>
                      </td>
                      <td><input type="text" name="related_strategic_objectives	_4" id="" value="৪"></td>
                      <td><input type="text" name="unit_measurement_4" id="" value="%"></td>
                      <td><input type="text" name="revised_goals_4" id="" value="4.25"></td>
                      <td><input type="text" name="actual_achievement_4" id="" value="২.২১"></td>
                      <td><input type="text" name="goals_4" id="" value="4"></td>
                      <td><input type="text" name="revised_goals_4_4" id="" value="4.25"></td>
                      <td><input type="text" name="medium_term_targets_4" id="" value="৩"></td>
                      <td><input type="text" name="medium_term_targets1_4" id="" value="৩.৫"></td>
                      <td><input type="text" name="medium_term_targets2_4" id="" value="৪"></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="seven_row_id" value="5">
                      <td>
                        <textarea name="indicative_5" id="" cols="30" rows="10">
                                      এমএফআই সদস্যদের সঞ্চয়ের হার বৃদ্ধি
                                    </textarea>
                      </td>
                      <td><input type="text" name="related_strategic_objectives	_5" id="" value="5"></td>
                      <td><input type="text" name="unit_measurement_5" id="" value="%"></td>
                      <td><input type="text" name="revised_goals_5" id="" value="19"></td>
                      <td><input type="text" name="actual_achievement_5" id="" value="14"></td>
                      <td><input type="text" name="goals_5" id="" value="10"></td>
                      <td><input type="text" name="revised_goals_5" id="" value="9"></td>
                      <td><input type="text" name="medium_term_targets_5" id="" value="12"></td>
                      <td><input type="text" name="medium_term_targets1_5" id="" value="18"></td>
                      <td><input type="text" name="medium_term_targets2_5" id="" value="15"></td>
                    </tr>
                  </tbody>
                </table>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_6_0[]" id="" value="৬.০	অধিদপ্তর/সংস্থার সাম্প্রতিক অর্জন, কার্যক্রমসমূহ এবং ফলাফল নির্দেশক ও লক্ষ্যমাত্রা এবং ব্যয় প্রাক্কলন">
            </li>
            <li>
              <input type="text" name="point_6_1[]" id="" value="৬.১	সচিবালয়">
              <ul>
                <li><input type="text" name="point_6_1_1[]" id="" value="৬.১.১	সাম্প্রতিক অর্জন: ব্যাংকিং খাতের মানোন্নয়নকল্পে রাষ্ট্রমালিকানাধীন বাণিজ্যিক ব্যাংকসমূহের জন্য Key Performance Indicator নির্ধারণ, মানব সম্পদ নীতিমালা প্রণয়ন ও অটোমেশন কার্যক্রম গ্রহণ করা হয়েছে। ব্যাংকসমূহে বিরাজমান জনবল সংকট নিরসন, ব্যবস্থাপনার উর্ধ্বতন পর্যায়ে নতুন পদ সৃজন এবং পরিচালনা পর্ষদে অভিজ্ঞ লোক নিয়োগ দেয়া হয়েছে। কৃষিঋণ বিতরণ, এজেন্ট/মোবাইল ব্যাংকিং, স্কুল ব্যাংকিং কার্যক্রমের মাধ্যমে আর্থিক অন্তর্ভুক্তি বৃদ্ধির উদ্যোগ নেয়া হয়েছে। বীমা খাতে অন্তর্ভুক্তি বৃদ্ধি ও শৃঙ্খলা সুসংহত করণের লক্ষ্যে বীমা আইনের আওতায় ২০১7-১8 অর্থবছরে ইতোমধ্যে ১টি বিধিমালা/ প্রবিধানমালা জারি করা হয়েছে। বীমা বিষয়ে ১৫০০ জন কর্মকর্তা/কর্মচারীকে প্রশিক্ষণ প্রদান করা হয়েছে। পুঁজিবাজারের কার্যকারিতা বৃদ্ধিকরণের জন্য 4টি বিধিমালা/প্রবিধানমালা জারি করা হয়েছে। পুঁজিবাজারে 756 জন বিনিয়োগকারীকে প্রশিক্ষণ প্রদান করা হয়েছে, দেশব্যাপি ফাইন্যান্সিয়াল লিটারেসি প্রোগ্রাম চালু করা হয়েছে। সুনিয়ন্ত্রিত ক্ষুদ্রঋণ কার্যক্রম সম্প্রসারণ ও পরিচালনার লক্ষ্যে এমএফআই সুবিধাভোগীর সংখ্যা ৩০৫ লক্ষতে উন্নীত করা হয়েছে। এছাড়াও মন্ত্রিপরিষদ বিভাগ কর্তৃক নির্ধারিত আবশ্যিক কৌশলগত উদ্দেশ্যসমূহ ১০০% বাস্তবায়নের প্রচেষ্টা অব্যহত আছে। "></li>
                <li>
                  <input type="text" name="point_6_1_2[]" id="" value="৬.১.২	কার্যক্রমসমূহ, ফলাফল নির্দেশক এবং নির্দেশকের লক্ষ্যমাত্রা">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">ফলাফল নির্দেশক
                          </td>
                          <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                            এর ক্রমিক

                          </td>
                          <td rowspan="2">পরিমাপের একক
                          </td>
                          <td>সংশোধিত লক্ষ্যমাত্রা</td>
                          <td>প্রকৃত
                            অর্জন
                          </td>
                          <td>লক্ষ্যমাত্রা</td>
                          <td>সংশোধিত লক্ষ্যমাত্রা
                          </td>
                          <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১7-১8</td>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="eight_row_id" value="1">
                          <td><input type="text" name="pursuit_1" id="" value="১"></td>
                          <td><input type="text" name="results_indicative_1" id="" value="২"></td>
                          <td><input type="text" name="sequence_respective_strategic_1" id="" value="৩"></td>
                          <td><input type="text" name="measurement_unit_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_targets_eight_1" id="" value="৫"></td>
                          <td><input type="text" name="actual_achievement_eight_1" id="" value="৬"></td>
                          <td><input type="text" name="goals_eight_1" id="" value="৭"></td>
                          <td><input type="text" name="revised_targets_eight_two_1" id="" value="৮"></td>
                          <td><input type="text" name="medium_term_targets_eight_1" id="" value="৯"></td>
                          <td><input type="text" name="medium_term_targets_eight1_1" id="" value="১০"></td>
                          <td><input type="text" name="medium_term_targets_eight2_1" id="" value="১১"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="eight_row_id" value="2">
                          <td>
                            <textarea name="pursuit_2" id="" cols="30" rows="10">
                                          1.	আর্থিক প্রতিষ্ঠান বিভাগের আওতাধীন দপ্তর/সংস্থা সম্পর্কিত আইন, বিধি ও নীতিমালা প্রণয়ন ও সংশোধন
                                        </textarea>
                          </td>
                          <td><input type="text" name="results_indicative_2" id="" value="প্রণীত ও সংশোধিত আইন/বিধি/নীতিমালা"></td>
                          <td><input type="text" name="sequence_respective_strategic_2" id="" value="১"></td>
                          <td><input type="text" name="measurement_unit_2" id="" value="সংখ্যা"></td>
                          <td><input type="text" name="revised_targets_eight_2" id="" value="5"></td>
                          <td><input type="text" name="actual_achievement_eight_2" id="" value="5"></td>
                          <td><input type="text" name="goals_eight_2" id="" value="7"></td>
                          <td><input type="text" name="revised_targets_eight_two_2" id="" value="4"></td>
                          <td><input type="text" name="medium_term_targets_eight_2" id="" value="5"></td>
                          <td><input type="text" name="medium_term_targets_eight1_2" id="" value="5"></td>
                          <td><input type="text" name="medium_term_targets_eight2_2" id="" value="5"></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
                <li>
                  <input type="text" name="point_6_1_3[]" id="" value="৬.১.৩	অপারেশন ইউনিট, স্কিম এবং প্রকল্পওয়ারি মধ্যমেয়াদি ব্যয় প্রাক্কলন">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                          <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                          </td>
                          <td rowspan="2">প্রকৃত
                            ২০১৭-১৮
                          </td>
                          <td>বাজেট</td>
                          <td>সংশোধিত
                            বাজেট
                          </td>
                          <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="nine_row_id" value="1">
                          <td><input type="text" name="operation_name_1" id="" value="১"></td>
                          <td><input type="text" name="related_activities_1" id="" value="২"></td>
                          <td><input type="text" name="authentic_1" id="" value="৩"></td>
                          <td><input type="text" name="budget_nine_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_budget_nine_1" id="" value="৫"></td>
                          <td><input type="text" name="estimate_nine_1" id="" value="৬"></td>
                          <td><input type="text" name="estimate_nine_1_1" id="" value="৭"></td>
                          <td><input type="text" name="estimate_nine_2_1" id="" value="৮"></td>
                        </tr>

                        <tr>
                          <input type="hidden" name="nine_row_id" value="2">
                          <td><input type="text" name="operation_name_2" id="" value=""></td>
                          <td><input type="text" name="related_activities_2" id="" value=""></td>
                          <td><input type="text" name="authentic_2" id="" value=""></td>
                          <td><input type="text" name="budget_nine_2" id="" value=""></td>
                          <td><input type="text" name="revised_budget_nine_2" id="" value=""></td>
                          <td><input type="text" name="estimate_nine_2" id="" value=""></td>
                          <td><input type="text" name="estimate_nine_1_2" id="" value=""></td>
                          <td><input type="text" name="estimate_nine_2_2" id="" value=""></td>
                        </tr>

                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_6_2[]" id="" value="৬.২	বাংলাদেশ ব্যাংক (বিবি)">
              <ul>
                <li><input type="text" name="point_6_2_1[]" id="" value="৬.২.১	সাম্প্রতিক অর্জন: বর্তমান সরকারের ‘রূপকল্প ২০২১’-এ পর্যায়ক্রমে দারিদ্রের হার ১৫ শতাংশের নীচে অবনমনের প্রত্যয় ব্যক্ত করা হয়েছে। এ লক্ষ্য অর্জনে বাংলাদেশ ব্যাংক স্বল্প মেয়াদি পদক্ষেপ হিসেবে কৃষি এবং ক্ষুদ্র ও মাঝারি শিল্পে অধিক মাত্রায় ঋণ বিতরণের পদক্ষেপ গ্রহণ করেছে যা আগামীতে দীর্ঘমেয়াদি কৌশল প্রণয়নে সহায়ক হবে। বাংলাদেশ ব্যাংক প্রধান কিছু উদ্দেশ্য অর্জনের জন্য অতি সম্প্রতি কৌশলগত পরিকল্পনা প্রণয়ন করেছে। প্রধান অর্জনগুলো হলো: (১) ২০১৭-১৮ সময়কালে বেসরকারি খাতে ঋণের প্রবৃদ্ধি ৯.৭১ শতাংশে দাঁড়িয়েছে; (২) চলতি অর্থবছরের প্রথমার্ধে ঋণ সুদ হার হ্রাসের কারণে সুদ হারের ব্যাপ্তি জুলাই ২০১৭ এর ৪.৬২ শতাংশ থেকে হ্রাস পেয়ে  ডিসেম্বর ২০১৭ শেষে ৪.৪৪ শতাংশে দাঁড়িয়েছে; (৩) ২০১৭-১৮ অর্থবছরের দ্বিতীয়ার্ধের মুদ্রানীতিতে সুদ হারের ব্যবধান ৫ শতাংশের নিচে নামিয়ে আনার লক্ষ্যে জানুয়ারি ২০১৮ শেষে সকল খাতের (ক্রেডিট কার্ড ও ভোক্তাঋণ ছাড়া) ঋণ এবং আমানতের  গড়ভারিত সুদ হারের ব্যবধান ছিল ৪.৩৪ শতাংশ; (৪) ২০১৭-১৮ অর্থবছরে কৃষি ও পল্লী ঋণ বিতরণের লক্ষ্যমাত্রা নির্ধারণ করা হয়েছে ২০,৪০০.০০ কোটি টাকা যা পূর্ববর্তী অর্থবছরের লক্ষ্যমাত্রা ১৭,৫৫০.০০ কোটি টাকার তুলনায় শতকরা ১৬.২৪ ভাগ বেশি; (৫) ২০১৭-১৮ অর্থবছর এর ফেব্রুয়ারি পর্যন্ত তফসিলী ব্যাংকসমূহ কর্তৃক বিতরণকৃত ঋণের পরিমাণ দাঁড়িয়েছে ১৪,৫২০.৪২ কোটি টাকা যা লক্ষ্যমাত্রার শতকরা ৭১.১৮ ভাগ। একই সময়ে কৃষি ও পল্লী ঋণ আদায়ের পরিমাণ দাঁড়িয়েছে ১৩,৫৯৬.৯৯ কোটি টাকা; (৬) ফেব্রুয়ারি ২০১৬ এ বাংলাদেশ ব্যাংক “জিটিএফ” নামে ২০০ মলিয়িন ইউএস ডলারের একটি নতুন র্দীঘময়োদী পুন:র্অথায়ন সুবিধা সৃষ্টি করা হয়; (৭) ২০১৭-১৮ অর্থবছরে ব্যাংক ও আর্থিক প্রতিষ্ঠানগুলো সর্বমোট ৩১৩.২৮ বিলেয়ন টাকা পরবিশ বান্ধব অর্থায়ন করেছে।"></li>
                <li>
                  <input type="text" name="point_6_2_2[]" id="" value="৬.২.২	কার্যক্রমসমূহ, ফলাফল নির্দেশক এবং নির্দেশকের লক্ষ্যমাত্রা">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">ফলাফল নির্দেশক
                          </td>
                          <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                            এর ক্রমিক

                          </td>
                          <td rowspan="2">পরিমাপের একক
                          </td>
                          <td>সংশোধিত লক্ষ্যমাত্রা</td>
                          <td>প্রকৃত
                            অর্জন
                          </td>
                          <td>লক্ষ্যমাত্রা</td>
                          <td>সংশোধিত লক্ষ্যমাত্রা
                          </td>
                          <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১7-১8</td>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <table border="1" width="100%">
                        <thead>
                          <tr>
                            <td rowspan="2">কার্যক্রম</td>
                            <td rowspan="2">ফলাফল নির্দেশক
                            </td>
                            <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                              এর ক্রমিক

                            </td>
                            <td rowspan="2">পরিমাপের একক
                            </td>
                            <td>সংশোধিত লক্ষ্যমাত্রা</td>
                            <td>প্রকৃত
                              অর্জন
                            </td>
                            <td>লক্ষ্যমাত্রা</td>
                            <td>সংশোধিত লক্ষ্যমাত্রা
                            </td>
                            <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                          </tr>
                          <tr>
                            <td colspan="2">২০১7-১8</td>
                            <td colspan="2">২০১8-১9</td>
                            <td>2019-2020</td>
                            <td>2020-2021</td>
                            <td>2021-2022</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <input type="hidden" name="ten_row_id" value="1">
                            <td><input type="text" name="activities_ten_1" id="" value="১"></td>
                            <td><input type="text" name="results_indicative_ten_1" id="" value="২"></td>
                            <td><input type="text" name="respective_strategic_ten_1" id="" value="৩"></td>
                            <td><input type="text" name="unit_measurement_ten_1" id="" value="৪"></td>
                            <td><input type="text" name="revised_targets1_ten_1" id="" value="৫"></td>
                            <td><input type="text" name="actual_achievement_ten_1" id="" value="৬"></td>
                            <td><input type="text" name="goals_ten_1" id="" value="৭"></td>
                            <td><input type="text" name="revised_targets2_ten_1_1" id="" value="৮"></td>
                            <td><input type="text" name="medium_target_ten_1" id="" value="৯"></td>
                            <td><input type="text" name="medium_target1_ten_1" id="" value="১০"></td>
                            <td><input type="text" name="medium_target2_ten_1" id="" value="১১"></td>
                          </tr>
                          <tr>
                            <input type="hidden" name="ten_row_id" value="2">
                            <td>
                              <textarea name="activities_ten_2" id="" cols="30" rows="5">
                                          ব্যাংকিং খাতে প্রাপ্ত বয়স্ক জনগণের অংশগ্রহণ
                                        </textarea>
                            </td>
                            <td>
                              <textarea name="results_indicative_ten_2" id="" cols="30" rows="5">
                                          সকল ধরণের হিসাব সংখ্যা 
                                        </textarea>
                            </td>
                            <td><input type="text" name="respective_strategic_ten_2" id="" value="২"></td>
                            <td><input type="text" name="unit_measurement_ten_2" id="" value="সংখ্যা (কোটি) (ক্রমপুঞ্জিভুত)"></td>
                            <td><input type="text" name="revised_targets1_ten_2" id="" value="৯.৭২"></td>
                            <td><input type="text" name="actual_achievement_ten_2" id="" value="৯.৫২"></td>
                            <td><input type="text" name="goals_ten_2" id="" value="৯.৮৪"></td>
                            <td><input type="text" name="revised_targets2_ten_2_1" id="" value="৯.৯০"></td>
                            <td><input type="text" name="medium_target_ten_2" id="" value="১০.২৯"></td>
                            <td><input type="text" name="medium_target1_ten_2" id="" value="১০.৬৭"></td>
                            <td><input type="text" name="medium_target2_ten_2" id="" value="১১.০৬"></td>
                          </tr>

                          <tr>
                            <input type="hidden" name="ten_row_id" value="1">
                            <td>
                              <textarea name="activities_ten_3" id="" cols="30" rows="5">
                                          1.	রাষ্ট্র মালিকানাধীন বাণিজ্যিক ব্যাংকসমূহের শ্রেণিকৃত ঋণ হ্রাসকরণ
                                        </textarea>
                            </td>
                            <td>
                              <textarea name="results_indicative_ten_3" id="" cols="30" rows="5">
                                          শ্রেণিকৃত ঋণের পরিমাণ
                                        </textarea>
                            </td>
                            <td><input type="text" name="respective_strategic_ten_3" id="" value="২"></td>
                            <td><input type="text" name="unit_measurement_ten_3" id="" value="কোটি টাকা"></td>
                            <td><input type="text" name="revised_targets1_ten_3" id="" value="৪০০০০"></td>
                            <td><input type="text" name="actual_achievement_ten_3" id="" value="৪০৩১৭"></td>
                            <td><input type="text" name="goals_ten_3" id="" value="৫৩৮৭৯"></td>
                            <td><input type="text" name="revised_targets2_ten_3_1" id="" value="৫৩৮৭৯"></td>
                            <td><input type="text" name="medium_target_ten_3" id="" value="৪৫০০০"></td>
                            <td><input type="text" name="medium_target1_ten_3" id="" value="৪২০০০"></td>
                            <td><input type="text" name="medium_target2_ten_3" id="" value="৪০০০০"></td>
                          </tr>

                          <tr>
                            <input type="hidden" name="ten_row_id" value="4">
                            <td>
                              <textarea name="activities_ten_4" id="" cols="30" rows="5">
                                          কৃষি খাতে ঋণ প্রদান তত্ত্বাবধান
                                        </textarea>
                            </td>
                            <td>
                              <textarea name="results_indicative_ten_4" id="" cols="30" rows="5">
                                          বিতরণকৃত ঋণ 
                                        </textarea>
                            </td>
                            <td><input type="text" name="respective_strategic_ten_4" id="" value="২"></td>
                            <td><input type="text" name="unit_measurement_ten_4" id="" value="হাজার কোটি টাকা"></td>
                            <td><input type="text" name="revised_targets1_ten_4" id="" value="২০.৪০"></td>
                            <td><input type="text" name="actual_achievement_ten_4" id="" value="21.3৯"></td>
                            <td><input type="text" name="goals_ten_4" id="" value="21.44"></td>
                            <td><input type="text" name="revised_targets2_ten_4_1" id="" value="21.80"></td>
                            <td><input type="text" name="medium_target_ten_4" id="" value="৩০.০০"></td>
                            <td><input type="text" name="medium_target1_ten_4" id="" value="৩৫.০০"></td>
                            <td><input type="text" name="medium_target2_ten_4" id="" value="৪০.০০"></td>
                          </tr>

                          <tr>
                            <input type="hidden" name="ten_row_id" value="5">
                            <td>
                              <textarea name="activities_ten_5" id="" cols="30" rows="5">
                                          এসএমই খাতে ঋণ প্রদান তত্ত্বাবধান
                                        </textarea>
                            </td>
                            <td>
                              <textarea name="results_indicative_ten_5" id="" cols="30" rows="5">
                                          বিতরণকৃত ঋণ
                                        </textarea>
                            </td>
                            <td><input type="text" name="respective_strategic_ten_5" id="" value="২"></td>
                            <td><input type="text" name="unit_measurement_ten_5" id="" value="হাজার কোটি টাকা"></td>
                            <td><input type="text" name="revised_targets1_ten_5" id="" value="13৪"></td>
                            <td><input type="text" name="actual_achievement_ten_5" id="" value="15৬"></td>
                            <td><input type="text" name="goals_ten_5" id="" value="১৫৭"></td>
                            <td><input type="text" name="revised_targets2_ten_5_1" id="" value="16৪"></td>
                            <td><input type="text" name="medium_target_ten_5" id="" value="1৭০"></td>
                            <td><input type="text" name="medium_target1_ten_5" id="" value="17৫"></td>
                            <td><input type="text" name="medium_target2_ten_5" id="" value="180"></td>
                          </tr>

                          <tr>
                            <input type="hidden" name="ten_row_id" value="6">
                            <td>
                              <textarea name="activities_ten_6" id="" cols="30" rows="5">
                                          1.	মোবাইল ব্যাংকিং কার্যক্রম সম্প্রসারণ
                                        </textarea>
                            </td>
                            <td>
                              <textarea name="results_indicative_ten_6" id="" cols="30" rows="5">
                                          বার্ষিক লেনদেন
                                        </textarea>
                            </td>
                            <td><input type="text" name="respective_strategic_ten_6" id="" value="২"></td>
                            <td><input type="text" name="unit_measurement_ten_6" id="" value="হাজার কোটি টাকা"></td>
                            <td><input type="text" name="revised_targets1_ten_6" id="" value="300"></td>
                            <td><input type="text" name="actual_achievement_ten_6" id="" value="৩৪৮"></td>
                            <td><input type="text" name="goals_ten_6" id="" value="৩০০"></td>
                            <td><input type="text" name="revised_targets2_ten_6_1" id="" value="৩০০"></td>
                            <td><input type="text" name="medium_target_ten_6" id="" value="৪৩৫"></td>
                            <td><input type="text" name="medium_target1_ten_6" id="" value="৪৪০"></td>
                            <td><input type="text" name="medium_target2_ten_6" id="" value="৪৪৫"></td>
                          </tr>
                        </tbody>
                      </table>
                    </table>
                  </ul>
                </li>
                <li>
                  <input type="text" name="point_6_2_3[]" id="" value="৬.২.৩	অপারেশন ইউনিট, স্কিম এবং প্রকল্পওয়ারি মধ্যমেয়াদি ব্যয় প্রাক্কলন">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                          <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                          </td>
                          <td rowspan="2">প্রকৃত
                            ২০১৭-১৮
                          </td>
                          <td>বাজেট</td>
                          <td>সংশোধিত
                            বাজেট
                          </td>
                          <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="eleven_row_id" value="1">
                          <td><input type="text" name="operation_eleven_1" id="" value="১"></td>
                          <td><input type="text" name="activities_eleven_1" id="" value="২"></td>
                          <td><input type="text" name="authentic_eleven_1" id="" value="৩"></td>
                          <td><input type="text" name="budget_eleven_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_budget_eleven_1" id="" value="৫"></td>
                          <td><input type="text" name="estimate_eleven_1" id="" value="৬"></td>
                          <td><input type="text" name="estimate_eleven_1_1" id="" value="৭"></td>
                          <td><input type="text" name="estimate_eleven_2_1" id="" value="৮"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="eleven_row_id" value="2">
                          <td><input type="text" name="operation_eleven_2" id="" value=""></td>
                          <td><input type="text" name="activities_eleven_2" id="" value=""></td>
                          <td><input type="text" name="authentic_eleven_2" id="" value=""></td>
                          <td><input type="text" name="budget_eleven_2" id="" value=""></td>
                          <td><input type="text" name="revised_budget_eleven_2" id="" value=""></td>
                          <td><input type="text" name="estimate_eleven_2" id="" value=""></td>
                          <td><input type="text" name="estimate_eleven_1_2" id="" value=""></td>
                          <td><input type="text" name="estimate_eleven_2_2" id="" value=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_6_3[]" id="" value="৬.৩	বাংলাদেশ সিকিউরিটিজ ও এক্সচেঞ্জ কমিশন (বিএসইসি)">
              <ul>
                <li><input type="text" name="point_6_3_1[]" id="" value=" ৬.৩.১	সাম্প্রতিক অর্জন:  ২০১5-২০১6 অর্থবছর হতে ২০১7-২০১8 অর্থবছর পর্যন্ত বিগত ৩ বছরে পুঁজিবাজারে বিনিয়োগ বৃদ্ধির লক্ষ্যে ২7টি কোম্পানীকে আইপিও (IPO), ১০টি কোম্পানীকে রাইট ইস্যু, 54টি কোম্পানীকে ডিবেঞ্চার ও বন্ড, 18টি কোম্পানীকে প্রিফারেন্স শেয়ার, 324টি প্রাইভেট লিঃ ও 217টি পাবলিক লিঃ কোম্পানীকে মোট 60,814.77 কোটি টাকা মূলধন উত্তোলনের অনুমোদন দেয়া হয়েছে। উক্ত সময়ে পুঁজিবাজার উন্নয়নের লক্ষ্যে 31টি বেমেয়াদি মিউচ্যুয়াল  ফান্ড এবং 7 টি মেয়াদি মিউচ্যুয়াল ফান্ড স্কিমের মাধ্যমে মোট 1,636.32 কোটি টাকার তহবিল গঠন করা হয়েছে। উক্ত মূলধন উত্তোলন ও তহবিল গঠন দেশের শিল্পায়ন, কর্মসংস্থান তথা দেশের সার্বিক অর্থনৈতিক উন্নয়নে সহায়ক ভূমিকা পালন করছে। ভাল সিকিউরিটিজের যোগান বৃদ্ধিতে কার্যকর ভূমিকা রাখার লক্ষ্যে কমিশন ২০১7-২০১8 অর্থবছরে পুঁজিবাজারে আরও ৮টি স্টক ব্রোকার সনদ, ৯টি স্টক ডিলার সনদ, ৩ টি এ্যাসেট ম্যনেজম্যান্ট কোম্পানি সনদ, ২১ টি সিকিউরিটি কাষ্টডিয়ান সনদ, ২১টি ডেট সিকিউরিটি ইস্যুর জন্য ট্রাস্টি নিবন্ধন সনদ, ১০টি ডিপজিটরি অংশগ্রহণকারী নিবন্ধন সনদ, ২টি ট্রাস্টি নিবন্ধন সনদ, ৭টি ফান্ড ম্যানেজারস নিবন্ধন সনদ প্রদান করেছে। কমিশন এর সক্ষমতা বৃদ্ধি এবং এটিকে শক্তিশালীকরণ, স্টক এক্সচেঞ্জসমূহের ডিমিউচ্যুয়ালাইজেশন, পুঁজিবাজারের জন্য বিশেষ ট্রাইবুনাল গঠন, পুঁজিবাজার বিষয়ক বিভিন্ন আইনের সংস্কার ও নতুন বিধি প্রণয়ন এবং আন্তর্জাতিক অঙ্গনে দেশের সুনাম বৃদ্ধি, ইত্যাদি গুরুত্বপুর্ণ ও ব্যাপক সংস্কার সাধন করেছে। জুন, 2018 পর্যন্ত স্টক এক্সচেঞ্জ সমূহে তালিকাভূক্ত কোম্পানীর সংখ্যা 305 এবং তালিকাভূক্ত সিকিউরিটিজের সংখ্যা 572 তে দাঁড়িয়েছে।"></li>
                <li>
                  <input type="text" name="point_6_3_2[]" id="" value="৬.৩.২ কার্যক্রমসমূহ, ফলাফল নির্দেশক এবং নির্দেশকের লক্ষ্যমাত্রা">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">ফলাফল নির্দেশক
                          </td>
                          <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                            এর ক্রমিক

                          </td>
                          <td rowspan="2">পরিমাপের একক
                          </td>
                          <td>সংশোধিত লক্ষ্যমাত্রা</td>
                          <td>প্রকৃত
                            অর্জন
                          </td>
                          <td>লক্ষ্যমাত্রা</td>
                          <td>সংশোধিত লক্ষ্যমাত্রা
                          </td>
                          <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১7-১8</td>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="twel_row_id" value="1">
                          <td><input type="text" name="activities_twel_1" id="" value="১"></td>
                          <td><input type="text" name="results_indicative_twel_1" id="" value="২"></td>
                          <td><input type="text" name="respective_strategic_twel_1" id="" value="৩"></td>
                          <td><input type="text" name="unit_measurement_twel_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_targets1_twel_1" id="" value="৫"></td>
                          <td><input type="text" name="actual_achievement_twel_1" id="" value="৬"></td>
                          <td><input type="text" name="goals_twel_1" id="" value="৭"></td>
                          <td><input type="text" name="revised_targets2_twel_1_1" id="" value="৮"></td>
                          <td><input type="text" name="medium_target_twel_1" id="" value="৯"></td>
                          <td><input type="text" name="medium_target1_twel_1" id="" value="১০"></td>
                          <td><input type="text" name="medium_target2_twel_1" id="" value="১১"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="twel_row_id" value="2">
                          <td>
                            <textarea name="activities_twel_2" id="" cols="30" rows="5">
                                          ব্যাংকিং খাতে প্রাপ্ত বয়স্ক জনগণের অংশগ্রহণ
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_twel_2" id="" cols="30" rows="5">
                                          সকল ধরণের হিসাব সংখ্যা 
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_twel_2" id="" value="২"></td>
                          <td><input type="text" name="unit_measurement_twel_2" id="" value="সংখ্যা (কোটি) (ক্রমপুঞ্জিভুত)"></td>
                          <td><input type="text" name="revised_targets1_twel_2" id="" value="৯.৭২"></td>
                          <td><input type="text" name="actual_achievement_twel_2" id="" value="৯.৫২"></td>
                          <td><input type="text" name="goals_twel_2" id="" value="৯.৮৪"></td>
                          <td><input type="text" name="revised_targets2_twel_2_1" id="" value="৯.৯০"></td>
                          <td><input type="text" name="medium_target_twel_2" id="" value="১০.২৯"></td>
                          <td><input type="text" name="medium_target1_twel_2" id="" value="১০.৬৭"></td>
                          <td><input type="text" name="medium_target2_twel_2" id="" value="১১.০৬"></td>
                        </tr>

                        <tr>
                          <input type="hidden" name="twel_row_id" value="3">
                          <td>
                            <textarea name="activities_twel_3" id="" cols="30" rows="5">
                                          1.	রাষ্ট্র মালিকানাধীন বাণিজ্যিক ব্যাংকসমূহের শ্রেণিকৃত ঋণ হ্রাসকরণ
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_twel_3" id="" cols="30" rows="5">
                                          শ্রেণিকৃত ঋণের পরিমাণ
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_twel_3" id="" value="২"></td>
                          <td><input type="text" name="unit_measurement_twel_3" id="" value="কোটি টাকা"></td>
                          <td><input type="text" name="revised_targets1_twel_3" id="" value="৪০০০০"></td>
                          <td><input type="text" name="actual_achievement_twel_3" id="" value="৪০৩১৭"></td>
                          <td><input type="text" name="goals_twel_3" id="" value="৫৩৮৭৯"></td>
                          <td><input type="text" name="revised_targets2_twel_3_1" id="" value="৫৩৮৭৯"></td>
                          <td><input type="text" name="medium_target_twel_3" id="" value="৪৫০০০"></td>
                          <td><input type="text" name="medium_target1_twel_3" id="" value="৪২০০০"></td>
                          <td><input type="text" name="medium_target2_twel_3" id="" value="৪০০০০"></td>
                        </tr>

                        <tr>
                          <input type="hidden" name="twel_row_id" value="4">
                          <td>
                            <textarea name="activities_twel_4" id="" cols="30" rows="5">
                                          কৃষি খাতে ঋণ প্রদান তত্ত্বাবধান
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_twel_4" id="" cols="30" rows="5">
                                          বিতরণকৃত ঋণ 
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_twel_4" id="" value="২"></td>
                          <td><input type="text" name="unit_measurement_twel_4" id="" value="হাজার কোটি টাকা"></td>
                          <td><input type="text" name="revised_targets1_twel_4" id="" value="২০.৪০"></td>
                          <td><input type="text" name="actual_achievement_twel_4" id="" value="21.3৯"></td>
                          <td><input type="text" name="goals_twel_4" id="" value="21.44"></td>
                          <td><input type="text" name="revised_targets2_twel_4_1" id="" value="21.80"></td>
                          <td><input type="text" name="medium_target_twel_4" id="" value="৩০.০০"></td>
                          <td><input type="text" name="medium_target1_twel_4" id="" value="৩৫.০০"></td>
                          <td><input type="text" name="medium_target2_twel_4" id="" value="৪০.০০"></td>
                        </tr>

                        <tr>
                          <input type="hidden" name="twel_row_id" value="5">
                          <td>
                            <textarea name="activities_twel_5" id="" cols="30" rows="5">
                                          এসএমই খাতে ঋণ প্রদান তত্ত্বাবধান
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_twel_5" id="" cols="30" rows="5">
                                          বিতরণকৃত ঋণ
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_twel_5" id="" value="২"></td>
                          <td><input type="text" name="unit_measurement_twel_5" id="" value="হাজার কোটি টাকা"></td>
                          <td><input type="text" name="revised_targets1_twel_5" id="" value="13৪"></td>
                          <td><input type="text" name="actual_achievement_twel_5" id="" value="15৬"></td>
                          <td><input type="text" name="goals_twel_5" id="" value="১৫৭"></td>
                          <td><input type="text" name="revised_targets2_twel_5_1" id="" value="16৪"></td>
                          <td><input type="text" name="medium_target_twel_5" id="" value="1৭০"></td>
                          <td><input type="text" name="medium_target1_twel_5" id="" value="17৫"></td>
                          <td><input type="text" name="medium_target2_twel_5" id="" value="180"></td>
                        </tr>

                        <tr>
                          <input type="hidden" name="twel_row_id" value="6">
                          <td>
                            <textarea name="activities_twel_6" id="" cols="30" rows="5">
                                          1.	মোবাইল ব্যাংকিং কার্যক্রম সম্প্রসারণ
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_twel_6" id="" cols="30" rows="5">
                                          বার্ষিক লেনদেন
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_twel_6" id="" value="২"></td>
                          <td><input type="text" name="unit_measurement_twel_6" id="" value="হাজার কোটি টাকা"></td>
                          <td><input type="text" name="revised_targets1_twel_6" id="" value="300"></td>
                          <td><input type="text" name="actual_achievement_twel_6" id="" value="৩৪৮"></td>
                          <td><input type="text" name="goals_twel_6" id="" value="৩০০"></td>
                          <td><input type="text" name="revised_targets2_twel_6_1" id="" value="৩০০"></td>
                          <td><input type="text" name="medium_target_twel_6" id="" value="৪৩৫"></td>
                          <td><input type="text" name="medium_target1_twel_6" id="" value="৪৪০"></td>
                          <td><input type="text" name="medium_target2_twel_6" id="" value="৪৪৫"></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
                <li>
                  <input type="text" name="point_6_3_3[]" id="" value="৬.৩.৩	অপারেশন ইউনিট, স্কিম এবং প্রকল্পওয়ারি মধ্যমেয়াদি ব্যয় প্রাক্কলন ">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                          <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                          </td>
                          <td rowspan="2">প্রকৃত
                            ২০১৭-১৮
                          </td>
                          <td>বাজেট</td>
                          <td>সংশোধিত
                            বাজেট
                          </td>
                          <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="thirteen_row_id" value="1">
                          <td><input type="text" name="operation_thirteen_1" id="" value="১"></td>
                          <td><input type="text" name="activities_thirteen_1" id="" value="২"></td>
                          <td><input type="text" name="authentic_thirteen_1" id="" value="৩"></td>
                          <td><input type="text" name="budget_thirteen_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_budget_thirteen_1" id="" value="৫"></td>
                          <td><input type="text" name="estimate_thirteen_1" id="" value="৬"></td>
                          <td><input type="text" name="estimate_thirteen_1_1" id="" value="৭"></td>
                          <td><input type="text" name="estimate_thirteen_2_1" id="" value="৮"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="thirteen_row_id" value="2">
                          <td><input type="text" name="operation_thirteen_2" id="" value=""></td>
                          <td><input type="text" name="activities_thirteen_2" id="" value=""></td>
                          <td><input type="text" name="authentic_thirteen_2" id="" value=""></td>
                          <td><input type="text" name="budget_thirteen_2" id="" value=""></td>
                          <td><input type="text" name="revised_budget_thirteen_2" id="" value=""></td>
                          <td><input type="text" name="estimate_thirteen_2" id="" value=""></td>
                          <td><input type="text" name="estimate_thirteen_1_2" id="" value=""></td>
                          <td><input type="text" name="estimate_thirteen_2_2" id="" value=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_6_4[]" id="" value="৬.৪	বাংলাদেশ ইন্‌স্টিটিউট অব ক্যাপিটাল মার্কেট (বিআইসিএম)">
              <ul>
                <li> <input type="text" name="point_6_4_1[]" id="" value="৬.৪.১	সাম্প্রতিক অর্জন: পুঁজিবাজারের বিষয়ে তাত্ত্বিক ও প্রায়োগিক জ্ঞানের উৎকর্ষ সাধনের জন্য প্রাতিষ্ঠানিক বিনিয়োগকারী, বাংলাদেশ সিকউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন (বি.এস.ই.সি.), স্টক এক্সচেঞ্জ এবং মধ্যস্থতাকারী প্রতিষ্ঠানসমূহের কর্মকর্তাদের প্রশিক্ষণ প্রদান করা হচ্ছে। ইতোমধ্যে বি.আই.সি.এম. কর্তৃক (১) ইনভেস্টরস এডুকেশন প্রোগ্রাম (২) সার্টিফিকেট ইন সিকিউরিটিজ ল’জ ইন বাংলাদেশ (৩) সার্টিফিকেট ইন ফাইন্যানসিয়াল স্টেটমেন্ট এনালাইসিস (৪) সার্টিফিকেট ইন ইন্টারন্যাশনাল ফাইন্যানসিয়াল রিপোর্টিং স্টান্ডার্ড (৫) এন্টারপ্রাইজ নেটওয়ার্ক সলিউসন্স ফর স্টক এক্সচেঞ্জ মেম্বারস (৬) সার্টিফিকেট ইন কর্পোরেট গভর্নেন্স এন্ড এড্রেসিং ফাইন্যানসিয়াল ফ্রডুলেন্স, এবিউজ, মার্কেট ম্যানুপুলেশন এন্ড ইনসাইডার ট্রেডিং (৭) সার্টিফিকেট ইন ইনভেস্টমেন্ট এনালাইসিস এন্ড সিকিউরিটিজ ভ্যালুয়েশন (৮) সার্টিফিকেট ইন ফাইন্যানসিয়াল জার্নালিজম (৯) টেকনিক্যাল এনালাইসিস (১০) ক্যাপিটাল রেইজিং এ্যান্ড ইনভেস্টমেন্ট ইন প্রাইমারী মার্কেট এবং (১১) পোস্ট গ্রাজুয়েট ডিপ্লোমা ইন ক্যাপিটাল মার্কেট ইত্যাদি বিষয়ে এ পর্যন্ত মোট ১০,৪১৫ জনকে প্রশিক্ষণ দেয়া হয়েছে এবং ১৭টি সেমিনার-ওয়ার্কশপ আয়োজন করা হয়েছে। ইন্সটিটিউট ইতোমধ্যে সান্ধ্যকালীন পিজিডিসিএম প্রোগ্রামের পাশাপাশি পুঁজিবাজারে পেশাজীবী হতে আগ্রহী সদ্য ডিগ্রীধারী গ্র্যাজুয়েটদের জন্য দিবাকালীন প্রোগ্রাম শুরু করেছে।"></li>
                <li>
                  <input type="text" name="point_6_4_2[]" id="" value="৬.৪.২	কার্যক্রমসমূহ, ফলাফল নির্দেশক এবং নির্দেশকের লক্ষ্যমাত্রা ">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">ফলাফল নির্দেশক
                          </td>
                          <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                            এর ক্রমিক

                          </td>
                          <td rowspan="2">পরিমাপের একক
                          </td>
                          <td>সংশোধিত লক্ষ্যমাত্রা</td>
                          <td>প্রকৃত
                            অর্জন
                          </td>
                          <td>লক্ষ্যমাত্রা</td>
                          <td>সংশোধিত লক্ষ্যমাত্রা
                          </td>
                          <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১7-১8</td>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="fourteen_row_id" value="1">
                          <td><input type="text" name="activities_fourteen_1" id="" value="১"></td>
                          <td><input type="text" name="results_indicative_fourteen_1" id="" value="২"></td>
                          <td><input type="text" name="respective_strategic_fourteen_1" id="" value="৩"></td>
                          <td><input type="text" name="unit_measurement_fourteen_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_targets1_fourteen_1" id="" value="৫"></td>
                          <td><input type="text" name="revised_targets2_fourteen_1" id="" value="৬"></td>
                          <td><input type="text" name="	actual_achievement_fourteen	_1" id="" value="৭"></td>
                          <td><input type="text" name="goals_fourteen_1" id="" value="৮"></td>
                          <td><input type="text" name="medium_target_fourteen_1" id="" value="৯"></td>
                          <td><input type="text" name="medium_target1_fourteen_1" id="" value="১০"></td>
                          <td><input type="text" name="medium_target2_fourteen_2" id="" value="১১"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="fourteen_row_id" value="2">
                          <td>
                            <textarea name="activities_fourteen_2" id="" cols="30" rows="5">
                                          1.	পুজিঁবাজারে প্রশিক্ষিত বিনিয়োগকারী/জনবল বৃদ্ধি              
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_fourteen_2" id="" cols="30" rows="5">
                                          প্রশিক্ষিত বিনিয়োগকারী/জনবল                                    
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_fourteen_2" id="" value="৩"></td>
                          <td><input type="text" name="unit_measurement_fourteen_2" id="" value="সংখ্যা"></td>
                          <td><input type="text" name="revised_targets1_fourteen_2" id="" value="1000"></td>
                          <td><input type="text" name="revised_targets2_fourteen_2" id="" value="1385"></td>
                          <td><input type="text" name="actual_achievement_fourteen_2" id="" value="900"></td>
                          <td><input type="text" name="goals_fourteen_2" id="" value="1400"></td>
                          <td><input type="text" name="medium_target_fourteen_2" id="" value="1450"></td>
                          <td><input type="text" name="medium_target1_fourteen_2" id="" value="1500"></td>
                          <td><input type="text" name="medium_target2_fourteen_2" id="" value="1600"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="fourteen_row_id" value="3">
                          <td rowspan="2">
                            <textarea name="activities_fourteen_3" id="" cols="30" rows="5">
                                          2.	পোস্ট গ্র্যাজুয়েট ডিপ্লোমা এবং সার্টিফিকেট কোর্স অন ক্যাপিটাল মার্কেট প্রোগ্রাম আয়োজন        
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_fourteen_3" id="" cols="30" rows="5">
                                          পোস্ট গ্র্যাজুয়েট ডিপ্লোমা প্রোগ্রাম সংখ্যা                                   
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_fourteen_3" id="" value="৩"></td>
                          <td><input type="text" name="unit_measurement_fourteen_3" id="" value="সংখ্যা"></td>
                          <td><input type="text" name="revised_targets1_fourteen_3" id="" value="3"></td>
                          <td><input type="text" name="revised_targets2_fourteen_3" id="" value="2"></td>
                          <td><input type="text" name="actual_achievement_fourteen_3" id="" value="3"></td>
                          <td><input type="text" name="goals_fourteen_3" id="" value="3"></td>
                          <td><input type="text" name="medium_target_fourteen_3" id="" value="3"></td>
                          <td><input type="text" name="medium_target1_fourteen_3" id="" value="8"></td>
                          <td><input type="text" name="medium_target2_fourteen_3" id="" value="8"></td>
                        </tr>
                        <tr>
                           <input type="hidden" name="fourteen_row_id_3_1" value="3">
                          <td>
                            <textarea name="results_indicative_fourteen_3_1" id="" cols="30" rows="5">
                                          সার্টিফিকেট প্রোগ্রাম সংখ্যা     
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_fourteen_3_1" id="" value="৩"></td>
                          <td><input type="text" name="unit_measurement_fourteen_3_1" id="" value="সংখ্যা"></td>
                          <td><input type="text" name="revised_targets1_fourteen_3_1" id="" value="১৩"></td>
                          <td><input type="text" name="revised_targets2_fourteen_3_1" id="" value="১০"></td>
                          <td><input type="text" name="actual_achievement_fourteen_3_1" id="" value="১৪"></td>
                          <td><input type="text" name="goals_fourteen_3_1" id="" value="১৫"></td>
                          <td><input type="text" name="medium_target_fourteen_3_1" id="" value="২০"></td>
                          <td><input type="text" name="medium_target1_fourteen_3_1" id="" value="২২"></td>
                          <td><input type="text" name="medium_target2_fourteen_3_1" id="" value="২৫"></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
                <li>
                  <input type="text" name="point_6_4_3[]" id="" value="৬.৪.৩	অপারেশন ইউনিট, স্কিম এবং প্রকল্পওয়ারি মধ্যমেয়াদি ব্যয় প্রাক্কলন">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">প্রাতিষ্ঠানিক ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                          <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                          </td>
                          <td rowspan="2">প্রকৃত
                            ২০১৭-১৮
                          </td>
                          <td>বাজেট</td>
                          <td>সংশোধিত
                            বাজেট
                          </td>
                          <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="fifteen_row_id" value="1">
                          <td><input type="text" name="operation_fifteen_1" id="" value="১"></td>
                          <td><input type="text" name="activities_fifteen_1" id="" value="২"></td>
                          <td><input type="text" name="authentic_fifteen_1" id="" value="৩"></td>
                          <td><input type="text" name="budget_fifteen_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_budget_fifteen_1" id="" value="৫"></td>
                          <td><input type="text" name="estimate_fifteen_1" id="" value="৬"></td>
                          <td><input type="text" name="estimate_fifteen_1_1" id="" value="৭"></td>
                          <td><input type="text" name="estimate_fifteen_2_1" id="" value="৮"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="fifteen_row_id" value="2">
                          <td><input type="text" name="operation_fifteen_2" id="" value=""></td>
                          <td><input type="text" name="activities_fifteen_2" id="" value=""></td>
                          <td><input type="text" name="authentic_fifteen_2" id="" value=""></td>
                          <td><input type="text" name="budget_fifteen_2" id="" value=""></td>
                          <td><input type="text" name="revised_budget_fifteen_2" id="" value=""></td>
                          <td><input type="text" name="estimate_fifteen_2" id="" value=""></td>
                          <td><input type="text" name="estimate_fifteen_1_2" id="" value=""></td>
                          <td><input type="text" name="estimate_fifteen_2_2_seventeen_" id="" value=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_6_5[]" id="" value="৬.৫	বীমা উন্নয়ন ও নিয়ন্ত্রণ কর্তৃপক্ষ">
              <ul>
                <li><input type="text" name="point_6_5_1[]" id="" value="৬.৫.১	সাম্প্রতিক অর্জন: বীমা উন্নয়ন ও নিয়ন্ত্রণ কর্তৃপক্ষের তত্ত্বাবধানে দেশে ৪৬টি নন-লাইফ এবং ৩2টি লাইফ বীমা কোম্পানি কার্যরত রয়েছে। ইতোমধ্যে কর্তৃপক্ষ বীমা শিল্প ব্যবসার স্বচ্ছতা ও জবাবদিহির লক্ষ্যে কার্যক্রম তদারকি শুরু করেছে।"></li>
                <li>
                  <input type="text" name="point_6_5_2[]" id="" value="৬.৫.২	কার্যক্রমসমূহ, ফলাফল নির্দেশক এবং নির্দেশকের লক্ষ্যমাত্রা">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">ফলাফল নির্দেশক
                          </td>
                          <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                            এর ক্রমিক

                          </td>
                          <td rowspan="2">পরিমাপের একক
                          </td>
                          <td>সংশোধিত লক্ষ্যমাত্রা</td>
                          <td>প্রকৃত
                            অর্জন
                          </td>
                          <td>লক্ষ্যমাত্রা</td>
                          <td>সংশোধিত লক্ষ্যমাত্রা
                          </td>
                          <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১7-১8</td>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
              <tr>
                <input type="hidden" name="sixteen_row_id" value="1">
                  <td><input type="text" name="activities_sixteen_1" id="" value="১"></td>
                  <td><input type="text" name="results_indicative_sixteen_1" id="" value="২"></td>
                  <td><input type="text" name="respective_strategic_sixteen_1" id="" value="৩"></td>
                  <td><input type="text" name="unit_measurement_sixteen_1" id="" value="৪"></td>
                  <td><input type="text" name="revised_targets1_sixteen_1" id="" value="৫"></td>
                  <td><input type="text" name="actual_achievement_sixteen_1" id="" value="৬"></td>
                  <td><input type="text" name="goals_sixteen_1" id="" value="৭"></td>
                  <td><input type="text" name="revised_targets2_sixteen_1_1" id="" value="৮"></td>
                  <td><input type="text" name="medium_target_sixteen_1" id="" value="৯"></td>
                  <td><input type="text" name="medium_target1_sixteen_1" id="" value="১০"></td>
                  <td><input type="text" name="medium_target1_sixteen_2" id="" value="১১"></td>
              </tr>
              <tr>
                 <input type="hidden" name="sixteen_row_id" value="2">
                  <td>
                      <textarea name="activities_sixteen_2" id="" cols="30" rows="5">
                                          1.	বীমা বিষয়ক বিধিমালা/প্রবিধানমালা প্রণয়ন                                        
                                        </textarea>
                  </td>
                  <td>
                      <textarea name="results_indicative_sixteen_2" id="" cols="30" rows="5">
                                          গেজেটে প্রকাশিত             
                                        </textarea>
                  </td>
                  <td><input type="text" name="respective_strategic_sixteen_2" id="" value="৪"></td>
                  <td><input type="text" name="unit_measurement_sixteen_2" id="" value="সংখ্যা"></td>
                  <td><input type="text" name="revised_targets1_sixteen_2" id="" value="4"></td>
                  <td><input type="text" name="actual_achievement_sixteen_2" id="" value="1"></td>
                  <td><input type="text" name="goals_sixteen_2" id="" value="5"></td>
                  <td><input type="text" name="revised_targets2_sixteen_2" id="" value="5"></td>
                  <td><input type="text" name="medium_target_sixteen_2" id="" value="৪"></td>
                  <td><input type="text" name="medium_target1_sixteen_2" id="" value="৫"></td>
                  <td><input type="text" name="medium_target2_sixteen_2" id="" value="৬"></td>
              </tr>
              <tr>
                 <input type="hidden" name="sixteen_row_id" value="3">
                  <td>
                      <textarea name="activities_sixteen_3" id="" cols="30" rows="5">
                                          2.	বীমা দাবী নিষ্পত্তির হার বৃদ্ধি                                
                                        </textarea>
                  </td>
                  <td>
                      <textarea name="results_indicative_sixteen_3" id="" cols="30" rows="5">
                                          নিস্পত্তিকৃত দাবীর হার        
                                        </textarea>
                  </td>
                  <td><input type="text" name="respective_strategic_sixteen_3" id="" value="৪"></td>
                  <td><input type="text" name="unit_measurement_sixteen_3" id="" value="%"></td>
                  <td><input type="text" name="revised_targets1_sixteen_3" id="" value="73"></td>
                  <td><input type="text" name="actual_achievement_sixteen_3" id="" value="70"></td>
                  <td><input type="text" name="goals_sixteen_3" id="" value="75"></td>
                  <td><input type="text" name="revised_targets2_sixteen_3" id="" value="76"></td>
                  <td><input type="text" name="medium_target_sixteen_3" id="" value="77"></td>
                  <td><input type="text" name="medium_target1_sixteen_3" id="" value="78"></td>
                  <td><input type="text" name="medium_target2_sixteen_3" id="" value="79"></td>
              </tr>
              <tr>
                 <input type="hidden" name="sixteen_row_id" value="4">
                  <td>
                      <textarea name="activities_sixteen_4" id="" cols="30" rows="5">
                                          3. বীমা বিষয়ে জনসচেতনতা বৃদ্ধি                               
                                        </textarea>
                  </td>
                  <td>
                      <textarea name="results_indicative_sixteen_4" id="" cols="30" rows="5">
                                          আয়োজিত ওয়ার্কশপ/ সেমিনার                                  
                                        </textarea>
                  </td>
                  <td><input type="text" name="respective_strategic_sixteen_4" id="" value="৪"></td>
                  <td><input type="text" name="unit_measurement_sixteen_4" id="" value="সংখ্যা"></td>
                  <td><input type="text" name="revised_targets1_sixteen_4" id="" value="5"></td>
                  <td><input type="text" name="actual_achievement_sixteen_4" id="" value="1০"></td>
                  <td><input type="text" name="goals_sixteen_4" id="" value="6"></td>
                  <td><input type="text" name="revised_targets2_sixteen_4" id="" value="৭"></td>
                  <td><input type="text" name="medium_target_sixteen_4" id="" value="10"></td>
                  <td><input type="text" name="medium_target1_sixteen_4" id="" value="12"></td>
                  <td><input type="text" name="medium_target2_sixteen_4" id="" value="1২"></td>
              </tr>
          </tbody>
                    </table>
                  </ul>
                </li>
                <li>
                  <input type="text" name="point_6_5_3[]" id="" value="৬.৫.৩	অপারেশন ইউনিট, স্কিম এবং প্রকল্পওয়ারি মধ্যমেয়াদি ব্যয় প্রাক্কলন">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                          <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                          </td>
                          <td rowspan="2">প্রকৃত
                            ২০১৭-১৮
                          </td>
                          <td>বাজেট</td>
                          <td>সংশোধিত
                            বাজেট
                          </td>
                          <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="seventeen_row_id" value="1">
                          <td><input type="text" name="operation_seventeen_1" id="" value="১"></td>
                          <td><input type="text" name="activities_seventeen_1" id="" value="২"></td>
                          <td><input type="text" name="authentic_seventeen_1" id="" value="৩"></td>
                          <td><input type="text" name="budget_seventeen_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_budget_seventeen_1" id="" value="৫"></td>
                          <td><input type="text" name="estimate_seventeen_1" id="" value="৬"></td>
                          <td><input type="text" name="estimate_seventeen_1_1" id="" value="৭"></td>
                          <td><input type="text" name="estimate_seventeen_2_1" id="" value="৮"></td>
                        </tr>
                        <tr>
                          <input type="hidden" name="seventeen_row_id" value="2">
                          <td><input type="text" name="operation_seventeen_2" id=""></td>
                          <td><input type="text" name="activities_seventeen_2" id=""></td>
                          <td><input type="text" name="authentic_seventeen_2" id=""></td>
                          <td><input type="text" name="budget_seventeen_2" id=""></td>
                          <td><input type="text" name="revised_budget_seventeen_2" id=""></td>
                          <td><input type="text" name="estimate_seventeen_2" id=""></td>
                          <td><input type="text" name="estimate_seventeen_1_2" id=""></td>
                          <td><input type="text" name="estimate_seventeen_2_2" id=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_6_6[]" id="" value="6.৬	বাংলাদেশ ইনসিওরেন্স একাডেমি">
              <ul>
                <li><input type="text" name="point_6_6_1[]" id="" value="৬.৬.১	সাম্প্রতিক অর্জন: বাংলাদেশ ইনসিওরেন্স একাডেমি জাতীয় পর্যায়ের বীমা শিক্ষা ও প্রতিষ্ঠান হিসাবে কাজ করছে এবং বীমা একাডেমি শীর্ষ প্রতিষ্ঠান হিসাবে জীবন বীমা ও সাধারণ বীমা বিষয়ের উপর দক্ষতার সহিত বিভিন্ন ধরণের কোর্স  পরিচালনা করে আসছে। বীমা একাডেমি নিয়মিতভাবে বীমা শিক্ষা ও প্রশিক্ষণের পাঠ্যক্রমে পরিবর্তন আনছে এবং বৈদেশিক পরীক্ষার কেন্দ্র হিসাবে লন্ডনের সহযোগিতায় এসিআইআই কোর্স পরিচালনা করছে এবং আন্তর্জাতিকমানের প্রশিক্ষণ কোর্স আয়োজন করছে।"></li>
                <li>
                  <input type="text" name="point_6_6_2[]" id="" value="৬.৬.২	কার্যক্রমসমূহ, ফলাফল নির্দেশক এবং নির্দেশকের লক্ষ্যমাত্রা ">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">ফলাফল নির্দেশক
                          </td>
                          <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                            এর ক্রমিক

                          </td>
                          <td rowspan="2">পরিমাপের একক
                          </td>
                          <td>সংশোধিত লক্ষ্যমাত্রা</td>
                          <td>প্রকৃত
                            অর্জন
                          </td>
                          <td>লক্ষ্যমাত্রা</td>
                          <td>সংশোধিত লক্ষ্যমাত্রা
                          </td>
                          <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১7-১8</td>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="text" name="eighteen_row_id" value="1">
                          <td><input type="text" name="activities_eighteen_1" id="" value="১"></td>
                          <td><input type="text" name="results_indicative_eighteen_1" id="" value="২"></td>
                          <td><input type="text" name="respective_strategic_eighteen_1" id="" value="৩"></td>
                          <td><input type="text" name="unit_measurement_eighteen_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_targets1_eighteen_1" id="" value="৫"></td>
                          <td><input type="text" name="revised_targets2_eighteen_1" id="" value="৬"></td>
                          <td><input type="text" name="actual_achievement_eighteen_1" id="" value="৭"></td>
                          <td><input type="text" name="goals_eighteen_1" id="" value="৮"></td>
                          <td><input type="text" name="medium_target_eighteen_1" id="" value="৯"></td>
                          <td><input type="text" name="medium_target1_eighteen_1" id="" value="১০"></td>
                          <td><input type="text" name="medium_target2_eighteen_2" id="" value="১১"></td>
                        </tr>
                        <tr>
                          <td>
                            <textarea name="activities_eighteen_2" id="" cols="30" rows="5">
                                          1.	বীমা বিষয়ে প্রশিক্ষণ প্রদান
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_eighteen_2" id="" cols="30" rows="5">
                                          প্রশিক্ষিত জনবল              
                                         </textarea>
                          </td>
                           <input type="text" name="eighteen_row_id" value="2">
                          <td><input type="text" name="respective_strategic_eighteen_2" id="" value="৪"></td>
                          <td><input type="text" name="unit_measurement_eighteen_2" id="" value="সংখ্যা"></td>
                          <td><input type="text" name="revised_targets1_eighteen_2" id="" value="1000"></td>
                          <td><input type="text" name="revised_targets2_eighteen_2" id="" value="৫১৯"></td>
                          <td><input type="text" name="actual_achievement_eighteen_2" id="" value="1050"></td>
                          <td><input type="text" name="goals_eighteen_2" id="" value="1100"></td>
                          <td><input type="text" name="medium_target_eighteen_2" id="" value="১২০০"></td>
                          <td><input type="text" name="medium_target1_eighteen_2" id="" value="১৩৫০"></td>
                          <td><input type="text" name="medium_target2_eighteen_2" id="" value="১৫০০"></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
                <li>
                  <input type="text" name="point_6_6_3[]" id="" value="৬.৬.৩	অপারেশন ইউনিট, স্কিম এবং প্রকল্পওয়ারি মধ্যমেয়াদি ব্যয় প্রাক্কলন">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                          <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                          </td>
                          <td rowspan="2">প্রকৃত
                            ২০১৭-১৮
                          </td>
                          <td>বাজেট</td>
                          <td>সংশোধিত
                            বাজেট
                          </td>
                          <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="nineteen_row_id" value="2">
                          <td><input type="text" name="operation_nineteen_1" id=""></td>
                          <td><input type="text" name="activities_nineteen_1" id=""></td>
                          <td><input type="text" name="authentic_nineteen_1" id=""></td>
                          <td><input type="text" name="budget_nineteen_1" id=""></td>
                          <td><input type="text" name="revised_budget_nineteen_1" id=""></td>
                          <td><input type="text" name="estimate_nineteen_1" id=""></td>
                          <td><input type="text" name="estimate_nineteen_1_1" id=""></td>
                          <td><input type="text" name="estimate_nineteen_2_1" id=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="listed-content">
          <ul>
            <li>
              <input type="text" name="point_6_7[]" id="" value="৬.৭	মাইক্রোক্রেডিট রেগুলেটরি অথরিটি">
              <ul>
                <li><input type="text" name="point_6_7_1[]" id="" value="৬.৭.১ 	সাম্প্রতিক অর্জন: মাইক্রোক্রেডিট রেগুলেটরী অথরিটি (এমআরএ) এ পর্যন্ত ৮১১টি ক্ষুদ্রঋণ বিতরণকারী প্রতিষ্ঠান (এমএফআই)-কে ক্ষুদ্রঋণ কার্যক্রম পরিচালনার জন্য সনদ প্রদান করেছে এবং আইন ও বিধিমালা পরিপালনে ব্যর্থ হওয়ায় ১০৯টি প্রতিষ্ঠানের সনদ বাতিল/প্রত্যাহার করা হয়েছে। ক্ষুদ্রঋণ কার্যক্রমের বিস্তৃতি কম এমন ৩৭টি জেলাসহ বিশেষ গোষ্ঠীর আওতায় ক্ষুদ্রঋণ কার্যক্রম পরিচালনার জন্য বর্তমানে ১০৯টি প্রতিষ্ঠানের সাময়িক অনুমতি বহাল রয়েছে। সমগ্র দেশের ক্ষুদ্রঋণ খাতের তথ্য সংগ্রহের জন্য ন্যাশনাল ডাটাবেইজ প্রতিষ্ঠা করা হয়েছে। ক্ষুদ্রঋণের সেবা কেন্দ্র (শাখা) সমূহের ভূতাত্বিক অবস্থান নির্ধারণপূর্বক তাদের পূর্ণাঙ্গ তথ্যাদি Google Map-এ সন্নিবেশের মাধ্যমে Digital Mapping of Microfinance Access Points in Bangladesh চালু করা হয়েছে এবং DFID এর অর্থায়নে FM-CIB প্রতিষ্ঠার কাজ চলমান রয়েছে। ক্ষুদ্রঋণ খাতের দক্ষতা বৃদ্ধির লক্ষে ক্ষুদ্রঋণ প্রতিষ্ঠানে কর্মরত প্রায় ৪,৫০০ কর্মকর্তাকে এমআরএ’র আইন-বিধি ও ডাটাবেইজ বিষয়ক প্রশিক্ষণ প্রদান করা হয়েছে।"></li>
                <li>
                  <input type="text" name="point_6_7_2[]" id="" value="৬.৭.২ কার্যক্রমসমূহ,ফলাফল নির্দেশক এবং নির্দেশকের লক্ষ্যমাত্রা">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">কার্যক্রম</td>
                          <td rowspan="2">ফলাফল নির্দেশক
                          </td>
                          <td rowspan="2">সংশিষ্ট কৌশলগত উদ্দেশ্য
                            এর ক্রমিক

                          </td>
                          <td rowspan="2">পরিমাপের একক
                          </td>
                          <td>সংশোধিত লক্ষ্যমাত্রা</td>
                          <td>প্রকৃত
                            অর্জন
                          </td>
                          <td>লক্ষ্যমাত্রা</td>
                          <td>সংশোধিত লক্ষ্যমাত্রা
                          </td>
                          <td colspan="3">মধ্যমেয়াদি লক্ষ্যমাত্রা</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১7-১8</td>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                    <tr>
                      <input type="hidden" name="twenty_row_id" value="1">
                          <td><input type="text" name="activities_twenty_1" id="" value="১"></td>
                          <td><input type="text" name="results_indicative_twenty_1" id="" value="২"></td>
                          <td><input type="text" name="respective_strategic_twenty_1" id="" value="৩"></td>
                          <td><input type="text" name="unit_measurement_twenty_1" id="" value="৪"></td>
                          <td><input type="text" name="revised_targets1_twenty_1" id="" value="৫"></td>
                          <td><input type="text" name="revised_targets2_twenty_1" id="" value="৬"></td>
                          <td><input type="text" name="actual_achievement_twenty_1" id="" value="৭"></td>
                          <td><input type="text" name="goals_twenty_1" id="" value="৮"></td>
                          <td><input type="text" name="medium_target_twenty_1" id="" value="৯"></td>
                          <td><input type="text" name="medium_target1_twenty_1" id="" value="১০"></td>
                          <td><input type="text" name="medium_target2_twenty_1" id="" value="১১"></td>
                    </tr>



                        <tr>
                           <input type="hidden" name="twenty_row_id" value="2">
                          <td rowspan="2">
                            <textarea name="activities_twenty_2" id="" cols="30" rows="5">
                                          1.	ক্ষুদ্রঋণ বিতরণ ও আদায়  
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_twenty_2" id="" cols="30" rows="5">
                                          বিতরণকৃত ক্ষুদ্রঋণ            
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_twenty_2" id="" value="৫"></td>
                          <td><input type="text" name="unit_measurement_twenty_2" id="" value="হাজার কোটি টাকায়"></td>
                          <td><input type="text" name="revised_targets1_twenty_2" id="" value="82"></td>
                          <td><input type="text" name="revised_targets2_twenty_2" id="" value="১৩৪"></td>
                          <td><input type="text" name="actual_achievement_twenty_2" id="" value="১৪০"></td>
                          <td><input type="text" name="goals_twenty_2" id="" value="১৪০"></td>
                          <td><input type="text" name="medium_target_twenty_2" id="" value="১৬৭"></td>
                          <td><input type="text" name="medium_target1_twenty_2" id="" value="১৯০"></td>
                          <td><input type="text" name="medium_target2_twenty_2" id="" value="২২০"></td>
                        </tr>


                        <tr>
                           <input type="hidden" name="twenty_row_id_2_1" value="2">
                          <td>
                            <textarea name="results_indicative_twenty_2_1" id="" cols="30" rows="5">
                                          আদায়যোগ্য ঋণ হতে আদায়ের পরিমান                                        
                                        </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_twenty_2_1" id="" value="৫"></td>
                          <td><input type="text" name="unit_measurement_twenty_2_1" id="" value="হাজার কোটি টাকায়"></td>
                          <td><input type="text" name="revised_targets1_twenty_2_1" id="" value="74"></td>
                          <td><input type="text" name="revised_targets2_twenty_2_1" id="" value="১২৭"></td>
                          <td><input type="text" name="actual_achievement_twenty_2_1" id="" value="১৩৩"></td>
                          <td><input type="text" name="goals_twenty_2_1" id="" value="১৩৩"></td>
                          <td><input type="text" name="medium_target_twenty_2_1" id="" value="১৬২"></td>
                          <td><input type="text" name="medium_target1_twenty_2_1" id="" value="১৮৫"></td>
                          <td><input type="text" name="medium_target2_twenty_2_1" id="" value="২১৫"></td>
                        </tr>


                        <tr>
                           <input type="hidden" name="twenty_row_id" value="3">
                          <td>
                            <textarea name="activities_twenty_3" id="" cols="30" rows="5">
                                          1.	এমএফআই সুবিধাভোগীদের সংখ্যা বৃদ্ধি                                        
                                        </textarea>
                          </td>
                          <td>
                            <textarea name="results_indicative_twenty_3" id="" cols="30" rows="5">
                                          সুবিধাভোগীর সংখ্যা           
                                         </textarea>
                          </td>
                          <td><input type="text" name="respective_strategic_twenty_3" id="" value="৫"></td>
                          <td><input type="text" name="unit_measurement_twenty_3" id="" value="সংখ্যা (লক্ষ))"></td>
                          <td><input type="text" name="revised_targets1_twenty_3" id="" value="300"></td>
                          <td><input type="text" name="revised_targets2_twenty_3" id="" value="30৫"></td>
                          <td><input type="text" name="actual_achievement_twenty_3" id="" value="30৭"></td>
                          <td><input type="text" name="goals_twenty_3" id="" value="30৭"></td>
                          <td><input type="text" name="medium_target_twenty_3" id="" value="31৫"></td>
                          <td><input type="text" name="medium_target1_twenty_3" id="" value="3২০"></td>
                          <td><input type="text" name="medium_target2_twenty_3" id="" value="32৫"></td>
                        </tr>


                      </tbody>
                    </table>
                  </ul>
                </li>
                <li>
                  <input type="text" name="point_6_7_3[]" id="" value="৬.৭.৩	অপারেশন ইউনিট, স্কিম এবং প্রকল্পওয়ারি মধ্যমেয়াদি ব্যয় প্রাক্কলন ">
                  <ul>
                    <table border="1" width="100%">
                      <thead>
                        <tr>
                          <td rowspan="2">অপারেশন ইউনিট, স্কিম এবং প্রকল্পের নাম</td>
                          <td rowspan="2">সংশ্লিষ্ট কার্যক্রম
                          </td>
                          <td rowspan="2">প্রকৃত
                            ২০১৭-১৮
                          </td>
                          <td>বাজেট</td>
                          <td>সংশোধিত
                            বাজেট
                          </td>
                          <td colspan="3">মধ্যমেয়াদি ব্যয় প্রাক্কলন</td>
                        </tr>
                        <tr>
                          <td colspan="2">২০১8-১9</td>
                          <td>2019-2020</td>
                          <td>2020-2021</td>
                          <td>2021-2022</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="twentyone_row_id" value="1">
                          <td><input type="text" name="operation_twentyone_1" id=""></td>
                          <td><input type="text" name="activities_twentyone_1" id=""></td>
                          <td><input type="text" name="authentic_twentyone_1" id=""></td>
                          <td><input type="text" name="budget_twentyone_1" id=""></td>
                          <td><input type="text" name="revised_budget_twentyone_1" id=""></td>
                          <td><input type="text" name="estimate_twentyone_1" id=""></td>
                          <td><input type="text" name="estimate_twentyone_1_1" id=""></td>
                          <td><input type="text" name="estimate_twentyone_2_1" id=""></td>
                        </tr>
                      </tbody>
                    </table>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>

      </div>
            <div class="mt-4 mb-4 input-final">
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">সংশোধন</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#basic-datatable').DataTable({
        });
    });
    $("#submitForm").submit(function (e) {
        e.preventDefault();
        $('#loader').show();
        $(".error_msg").html('');
        var data = new FormData($('#submitForm')[0]);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("store-appendix_seven")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {
            alert('Form Submitted Successfully!');
            $('#loader').hide();
//            location.reload();
            }
        }).done(function () {
            $("#success_msg").html("Data Save Successfully");
//            window.location.href = "{{ url('departments')}}";
            // location.reload();
        }).fail(function (data, textStatus, jqXHR) {
            $('#loader').hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });
</script>
