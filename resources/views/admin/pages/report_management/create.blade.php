@extends('admin.master')
@section('content')
<!doctype html>

  <style>
      .form-1-new h3,
.form-2-new h3,
.form-3-new h3 {
    text-align: center;
}
.user-information,
.twonddataform,
.form-1-new,
.form-2-new,
.form-3-new,
.form-4-new,
.form-5-new,
.form-6-new{
    margin-top: 50px;
    margin-bottom: 50px;
}
.user-information {
    display: flex;
    justify-content: space-between;
}
  </style>

   <div class="content">
    <div class="page-inner">
        <div class="user-information">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Setting</h5>
                  <p class="card-text">Edit Profile</p>
                  <p class="card-text">Edit Password</p>
                  <p class="card-text">manage/Create User</p>
                </div>
              </div>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">User Information</h5>
                  <p class="card-text">Name: <span class="user-name">Faisal Ahmad</span></p>
                  <p class="card-text">Designation: <span class="user-desig">SPO</span></p>
                  <p class="card-text">Office: <span class="user-office">MoF, FID, Budget</span></p>
                  <p class="card-text">User Type: <span class="user-type">Super Admin</span></p>
                </div>
              </div>
            
        </div>
        <div class="entryform">
            <h3>Menu>1.1. Annual Performance Agreement</h3>
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Financial Year">Financial Year:</label>
                    <input type="text" class="form-control" id="Financial Year" placeholder="Financial Year">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Period">Period:</label>
                    <input type="text" class="form-control" id="Period" placeholder="Period">
                  </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="ministry">Ministry/Division/Regulatory/Organization/Office/Branch:</label>
                            <input type="text" class="form-control" id="ministry" placeholder="Ministry/Division/Regulatory/Organization/Office/Branch:">
                        </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="প্রাপক">প্রাপক:</label>
                    <select id="প্রাপক" class="form-control">
                        <option disabled selected>মন্ত্রণালয়/বিভাগ</option>
                        <option value="1">২০১৮-১৯</option>
                        <option value="2">২০১৯-২০</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="word">Word</label><br>
                    <button type="submit" class="btn btn-success">Word</button>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="pdf">PDF:</label><br>
                    <button type="submit" class="btn btn-success">PDF</button>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="সম্পুর্ন প্রতিবেদন দেখুন">সম্পুর্ন প্রতিবেদন দেখুন</label><br>
                    <button type="submit" class="btn btn-success">দেখুন</button>
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="সাম্প্রতিক">সাম্প্রতিক বছরসমূহের (৩ বছর) প্রধান অর্জনসমূহ</label>
                      <input type="text" class="form-control" id="সাম্প্রতিক" placeholder="সাম্প্রতিক বছরসমূহের (৩ বছর) প্রধান অর্জনসমূহ">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="সমস্যা এবং চ্যালেঞ্জসমূহ">সমস্যা এবং চ্যালেঞ্জসমূহ:</label>
                      <input type="text" class="form-control" id="সমস্যা এবং চ্যালেঞ্জসমূহ" placeholder="সমস্যা এবং চ্যালেঞ্জসমূহ:">
                    </div>
                  </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">ভবিষ্যৎ পরিকল্পনা:</label>
                      <input type="text" class="form-control" id="" placeholder="ভবিষ্যৎ পরিকল্পনা">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">সম্ভাব্য প্রধান অর্জনসমূহ:</label>
                      <input type="text" class="form-control" id="" placeholder="সম্ভাব্য প্রধান অর্জনসমূহ">
                    </div>
                  </div>
                
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">সংশোধন</button>
              </form>
        </div>
        <div class="twonddataform">
            <h3>প্রস্তাবনা (Preamble)</h3>
            <form>
                <p>মণালয়/িবভাগসহ এবং আওতাধীন দর/সংাসেহর ািতািনক দতা ি, তা ও জবাবিদিহ<br>জারদার করা, শাসন সংহতকরণ এবং সেদর যথাযথ বহার িনিতকরেণর মােম পক ২০২১<br>এর যথাযথ বাবায়েনর লে-<br>
                    গণজাতী বাংলােদশ সরকােরর অথ  মণালয়-এর দািয়ে িনেয়ািজত মাননীয় মীর িতিনিধ িহসােব<br>সিচব, আিথক িতান িবভাগ<br>এবং<br>গণজাতী বাংলােদশ সরকােরর মাননীয় ধানমীর িতিনিধ িহসােব মিপিরষদ সিচব, মিপিরষদ<br>িবভাগ-এর মে ২০১৭ সােলর লাই মােসর ০৬ তািরেখ এই বািষক কমস াদন ি ািরত হল।<br>এই িেত ারকারী উভয়প িনিলিখত িবষয়সেহ সত হেলন:<br></p>
                
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">সংশোধন</button>
              </form>
        </div>

    <div class="report-1.1 form-1-new">
        <h3>সেকশন-১: মন্ত্রণালয়/বিভাগের রূপকল্প (Vision), অভিলক্ষ্য (Mission), কৌশলগত উদ্দেশ্যসমূহ এবং কার্যাবলি</h3>
      <form>
            <div class="form-group col-md-12">
              <label for="">১.১ রূপকল্প (Vision):</label>
              <input type="text" class="form-control" id="" placeholder="১.১ রূপকল্প (Vision)">
            </div>
            <div class="form-group col-md-12">
              <label for="">১.২ অভিলক্ষ্য (Mission)</label>
              <input type="text" class="form-control" id="" placeholder="১.২ অভিলক্ষ্য (Mission)">
            </div>
            
            <div class="form-group col-md-12">
                <h5>১.৩ কৌশলগত উদ্দেশ্যসমূহ (Strategic Objectives)</h5>
              <label for="">১.৩.১ মন্ত্রণালয়/ বিভাগের কৌশলগত উদ্দেশ্যসমূহ</label>
              <input type="text" class="form-control" id="" placeholder="১.৩.১ মন্ত্রণালয়/ বিভাগের কৌশলগত উদ্দেশ্যসমূহ">
              <label for="">১.৩.২ আবশ্যিক কৌশলগত উদ্দেশ্যসমূহ</label>
              <input type="text" class="form-control" id="" placeholder="১.৩.২ আবশ্যিক কৌশলগত উদ্দেশ্যসমূহ">
            </div>
            <div class="form-group col-md-12">
              <label for="">১.৪ কার্যাবলি (Functions)</label>
              <input type="text" class="form-control" id="" placeholder="১.৪ কার্যাবলি (Functions)">
            </div>
          
          <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
          <button type="submit" class="btn btn-danger">সংশোধন</button>
        </form>
    </div>
    <div class="report-1.1 form-2-new">
        <h3>সেকশন-২: মন্ত্রণালয়/বিভাগের বিভিন্ন কার্যক্রমের চূড়ান্ত ফলাফল/প্রভাব (Outcome/Impact) (সেকশন-৩ এর পর পূরণ করুন)</h3>
      <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="চূড়ান্ত ফলাফল/প্রভাব">চূড়ান্ত ফলাফল/প্রভাব</label>
              <input type="text" class="form-control" id="চূড়ান্ত ফলাফল/প্রভাব" placeholder="চূড়ান্ত ফলাফল/প্রভাব">
            </div>
            <div class="form-group col-md-6">
              <label for="চূড়ান্ত ফলাফল সূচক">চূড়ান্ত ফলাফল সূচক</label>
              <input type="text" class="form-control" id="চূড়ান্ত ফলাফল সূচক" placeholder="চূড়ান্ত ফলাফল সূচক">
            </div>
          </div>
          <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="একক">একক</label>
                      <input type="text" class="form-control" id="একক" placeholder="একক">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="ভিত্তি বছর">ভিত্তি বছর</label>
                      <input type="text" class="form-control" id="ভিত্তি বছর" placeholder="ভিত্তি বছর">
                  </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="প্রকৃত অর্জন*">প্রকৃত অর্জন*</label>
              <input type="text" class="form-control" id="প্রকৃত অর্জন*">
            </div>
            <div class="form-group col-md-6">
              <label for="লক্ষ্যমাত্রা">লক্ষ্যমাত্রা</label>
              <input type="text" class="form-control" id="লক্ষ্যমাত্রা">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="প্রক্ষেপণ">প্রক্ষেপণ</label>
              <select id="প্রক্ষেপণ" class="form-control">
                      <option disabled selected>বাছাই করুন</option>
                      <option value="1">২০১৮-১৯</option>
                      <option value="2">২০১৯-২০</option>
                  </select>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="নির্ধারিত লক্ষ্যমাত্রা অর্জনের ক্ষেত্রে যৌথভাবে দায়িত্বপ্রাপ্ত মন্ত্রণালয়/বিভাগ/ সংস্হাসমূহের নাম">নির্ধারিত লক্ষ্যমাত্রা অর্জনের ক্ষেত্রে যৌথভাবে দায়িত্বপ্রাপ্ত মন্ত্রণালয়/বিভাগ/ সংস্হাসমূহের নাম</label>
              <input type="text" class="form-control" id="নির্ধারিত লক্ষ্যমাত্রা অর্জনের ক্ষেত্রে যৌথভাবে দায়িত্বপ্রাপ্ত মন্ত্রণালয়/বিভাগ/ সংস্হাসমূহের নাম">
            </div>
            <div class="form-group col-md-4">
              <label for="উপাত্তসূত্র">উপাত্তসূত্র</label>
              <input type="text" class="form-control" id="উপাত্তসূত্র">
            </div>
          </div>
          
          <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
          <button type="submit" class="btn btn-danger">সংশোধন</button>
        </form>
    </div>
    <div class="report-1.1 form-3-new">
        <h3>সেকশন-৩: কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং লক্ষ্যমাত্রাসমূহ</h3>
      <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="কৌশলগত উদ্দেশ্য">কৌশলগত উদ্দেশ্য</label>
              <input type="text" class="form-control" id="কৌশলগত উদ্দেশ্য" placeholder="কৌশলগত উদ্দেশ্য">
            </div>
            <div class="form-group col-md-6">
              <label for="কৌশলগত উদ্দেশ্যের মান">কৌশলগত উদ্দেশ্যের মান</label>
              <input type="text" class="form-control" id="কৌশলগত উদ্দেশ্যের মান" placeholder="কৌশলগত উদ্দেশ্যের মান">
            </div>
          </div>
          <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="কার্যক্রম">কার্যক্রম</label>
                      <input type="text" class="form-control" id="কার্যক্রম" placeholder="কার্যক্রম">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="কর্মসম্পাদন সূচক">কর্মসম্পাদন সূচক</label>
                      <input type="text" class="form-control" id="কর্মসম্পাদন সূচক" placeholder="কর্মসম্পাদন সূচক">
                  </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="একক">একক</label>
              <input type="text" class="form-control" id="একক">
            </div>
            <div class="form-group col-md-6">
              <label for="কর্মসম্পাদন সূচকের মান">কর্মসম্পাদন সূচকের মান</label>
              <input type="text" class="form-control" id="কর্মসম্পাদন সূচকের মান">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="ভিত্তি বছর">ভিত্তি বছর</label>
              <input type="text" class="form-control" id="ভিত্তি বছর">
            </div>
            <div class="form-group col-md-3">
              <label for="প্রকৃত অর্জন*">প্রকৃত অর্জন*</label>
              <input type="text" class="form-control" id="প্রকৃত অর্জন* ">
            </div>
            <div class="form-group col-md-3">
              <label for="লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮</label>
              <select id="লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮" class="form-control">
                <option disabled selected>বাছাই করুন</option>
                      <option value="1">অসাধারণ</option>
                      <option value="2">অতি উত্তম</option>
                      <option value="3">উত্তম</option>
                      <option value="4">চলতি মান</option>
                      <option value="5">চলতি মানের নিম্নে</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="প্রক্ষেপণ">প্রক্ষেপণ</label>
              <select id="প্রক্ষেপণ" class="form-control">
                      <option disabled selected>বাছাই করুন</option>
                      <option value="1">২০১৮-১৯</option>
                      <option value="2">২০১৯-২০</option>
                  </select>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="বিবরণ">বিবরণ</label>
              <input type="text" class="form-control" id="বিবরণ">
            </div>
            <div class="form-group col-md-3">
              <label for="বাস্তবায়নকারী দপ্তর/সংস্থা">বাস্তবায়নকারী দপ্তর/সংস্থা</label>
              <input type="text" class="form-control" id="বাস্তবায়নকারী দপ্তর/সংস্থা">
            </div>
            <div class="form-group col-md-3">
              <label for="পরিমাপ পদ্ধতি">পরিমাপ পদ্ধতি</label>
              <input type="text" class="form-control" id="পরিমাপ পদ্ধতি">
            </div>
            <div class="form-group col-md-3">
              <label for="উপাত্ত সূত্র">উপাত্ত সূত্র</label>
              <input type="text" class="form-control" id="উপাত্ত সূত্র">
            </div>
          </div>
          
          <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
          <button type="submit" class="btn btn-danger">সংশোধন</button>
        </form>
    </div>
      <div class="report-1.1 form-4-new">
          <h3>আবশ্যিক কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং লক্ষ্যমাত্রাসমূহ</h3>
        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="কৌশলগত উদ্দেশ্য">কৌশলগত উদ্দেশ্য</label>
                <input type="text" class="form-control" id="কৌশলগত উদ্দেশ্য" placeholder="কৌশলগত উদ্দেশ্য">
              </div>
              <div class="form-group col-md-6">
                <label for="কৌশলগত উদ্দেশ্যের মান">কৌশলগত উদ্দেশ্যের মান</label>
                <input type="text" class="form-control" id="কৌশলগত উদ্দেশ্যের মান" placeholder="কৌশলগত উদ্দেশ্যের মান">
              </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="কার্যক্রম">কার্যক্রম</label>
                        <input type="text" class="form-control" id="কার্যক্রম" placeholder="কার্যক্রম">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="কর্মসম্পাদন সূচক">কর্মসম্পাদন সূচক</label>
                        <input type="text" class="form-control" id="কর্মসম্পাদন সূচক" placeholder="কর্মসম্পাদন সূচক">
                    </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="একক">একক</label>
                <input type="text" class="form-control" id="একক">
              </div>
              <div class="form-group col-md-6">
                <label for="কর্মসম্পাদন সূচকের মান">কর্মসম্পাদন সূচকের মান</label>
                <input type="text" class="form-control" id="কর্মসম্পাদন সূচকের মান">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="ভিত্তি বছর">ভিত্তি বছর</label>
                <input type="text" class="form-control" id="ভিত্তি বছর">
              </div>
              <div class="form-group col-md-3">
                <label for="প্রকৃত অর্জন*">প্রকৃত অর্জন*</label>
                <input type="text" class="form-control" id="প্রকৃত অর্জন* ">
              </div>
              <div class="form-group col-md-3">
                <label for="লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮</label>
                <select id="লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮" class="form-control">
                  <option disabled selected>বাছাই করুন</option>
                        <option value="1">অসাধারণ</option>
                        <option value="2">অতি উত্তম</option>
                        <option value="3">উত্তম</option>
                        <option value="4">চলতি মান</option>
                        <option value="5">চলতি মানের নিম্নে</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="প্রক্ষেপণ">প্রক্ষেপণ</label>
                <select id="প্রক্ষেপণ" class="form-control">
                        <option disabled selected>বাছাই করুন</option>
                        <option value="1">২০১৮-১৯</option>
                        <option value="2">২০১৯-২০</option>
                    </select>
                </select>
              </div>
            </div>
            <div class="form-group ending-css">
                
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">সংশোধন</button>
            </div>
          </form>
      </div>
      <div class="twonddataform">
        <form>
            <p>আিম, সিচব, আিথক িতান িবভাগ, মাননীয় মী, অথ  মণালয়-এর িতিনিধ িহসােব গণজাতী বাংলােদশ<br>সরকােরর মাননীয় ধানমীর িতিনিধ মিপিরষদ সিচেবর িনকট অীকার করিছ য, এই িেত বিণত ফলাফল<br>অজেন সেচ থাকব।<br>আিম, মিপিরষদ সিচব, গণজাতী বাংলােদশ সরকােরর মাননীয় ধানমীর িতিনিধ িহসােব সিচব, আিথক<br>িতান িবভাগ-এর িনকট অীকার করিছ য, এই িেত বিণত ফলাফল অজে ন েয়াজনীয় সহেযািগতা দান<br>করব।
            </p>
            
            <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
            <button type="submit" class="btn btn-danger">সংশোধন</button>
          </form>
    </div>
      <div class="report-1.1 form-5-new">
          <h3>সংযোজনী</h3>
        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">শব্দসংক্ষেপ </label>
                <input type="text" class="form-control" id="" placeholder="শব্দসংক্ষেপ">
              </div>
              <div class="form-group col-md-6">
                <label for="">বিবরণ</label>
                <input type="text" class="form-control" id="" placeholder="বিবরণ">
              </div>
            </div>
            <div class="form-group ending-css">
                
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">সংশোধন</button>
            </div>
          </form>
      </div>
      <div class="report-1.1 form-6-new">
          <h3>অন্যান্য মন্ত্রণালয়/বিভাগের/অধিদপ্তর/সংস্থা-এর নিকট প্রত্যাশিত সুনির্দিষ্ট কর্মসম্পাদন সহায়তাসমূহ</h3>
        <form>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="">প্রতিষ্ঠানের ধরণ</label>
                <input type="text" class="form-control" id="" placeholder="প্রতিষ্ঠানের ধরণ">
              </div>
              <div class="form-group col-md-4">
                <label for="">প্রতিষ্ঠানের নাম</label>
                <input type="text" class="form-control" id="" placeholder="প্রতিষ্ঠানের নাম">
              </div>
              <div class="form-group col-md-4">
                <label for="">সংশ্লিষ্ট কর্মসম্পাদন সূচক</label>
                <input type="text" class="form-control" id="" placeholder="সংশ্লিষ্ট কর্মসম্পাদন সূচক">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="">উক্ত প্রতিষ্ঠানের নিকট সংশ্লিষ্ট </label>
                <input type="text" class="form-control" id="" placeholder="উক্ত প্রতিষ্ঠানের নিকট সংশ্লিষ্ট">
              </div>
              <div class="form-group col-md-4">
                <label for="">প্রত্যাশার যৌক্তিকতা</label>
                <input type="text" class="form-control" id="" placeholder="প্রত্যাশার যৌক্তিকতা">
              </div>
              <div class="form-group col-md-4">
                <label for="">প্রত্যাশা পূরণ না হলে সম্ভাব্য প্রভাব</label>
                <input type="text" class="form-control" id="" placeholder="প্রত্যাশা পূরণ না হলে সম্ভাব্য প্রভাব">
              </div>
            </div>
            <div class="form-group ending-css">
                
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">সংশোধন</button>
            </div>
          </form>
      </div>
      <div class="report-1.1 form-6-new">
          <h3>সংযুক্তি-</h3>
        <form>
              <div class="form-group col-md-4">
                <input type="file" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <input type="file" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <input type="file" class="form-control" id="" placeholder="">
              </div>
            <div class="form-group ending-css">
                
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">দাখিল করুন</button>
                <button type="submit" class="btn btn-danger">ফেরত পাঠান</button>
                <label for="">কারন</label>
                <input type="text">
            </div>
          </form>
      </div>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
  
@endsection