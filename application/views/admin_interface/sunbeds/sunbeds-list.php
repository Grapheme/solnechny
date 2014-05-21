<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("admin_interface/includes/head");?>
<link rel="stylesheet" href="<?=site_url('css/jquery-ui/jquery.ui.all.css');?>" />
</head>
<body>
	<div id="wrap">
		<?php $this->load->view("admin_interface/includes/header");?>
		<div class="container">
			<div class="row">
				<?php $this->load->view("admin_interface/includes/sidebar");?>
				<div class="span9">
					<ul class="breadcrumb">
						<li><a class="none muted" href="<?=site_url(uri_string());?>">Панель администрирования</a> <span class="divider">/</span></li>
						<li class="active">Бронирование лежаков</li>
					</ul>
				</div>
			</div>
			<div class="plan-con pattern">
				<div class="div-operation">
					Выберите дату: 
					<input type="text" class="input-small datepicker" readonly="readonly" name="date" value="<?=($this->input->get('date') != FALSE)?$this->input->get('date'):date("d.m.Y");?>">
					<button class="btn btn-medium set-free-sunbeds-statuses">Освободить лежаки</button>
					<button class="btn btn-medium set-engaged-sunbeds-statuses">Занять лежаки</button><br/>
				</div>
				<div class="server-response"></div>
				<div class="wait-request hidden"></div>
				<div class="plan-div pool-schema">
					<div class="sunbed" id="sunbed-1">1</div>
					<div class="sunbed" id="sunbed-2">2</div>
					<div class="sunbed" id="sunbed-3">3</div>
					<div class="sunbed" id="sunbed-4">4</div>
					<div class="sunbed" id="sunbed-5">5</div>
					<div class="sunbed" id="sunbed-6">6</div>
					<div class="sunbed" id="sunbed-7">7</div>
					<div class="sunbed" id="sunbed-8">8</div>
					<div class="sunbed" id="sunbed-9">9</div>
					<div class="sunbed" id="sunbed-10">10</div>
					<div class="sunbed" id="sunbed-11">11</div>
					<div class="sunbed" id="sunbed-12">12</div>
					<div class="sunbed" id="sunbed-13">13</div>
					<div class="sunbed" id="sunbed-14">14</div>
					<div class="sunbed" id="sunbed-15">15</div>
					<div class="sunbed" id="sunbed-16">16</div>
					<div class="sunbed" id="sunbed-17">17</div>
					<div class="sunbed" id="sunbed-18">18</div>
					<div class="sunbed" id="sunbed-19">19</div>
					<div class="sunbed" id="sunbed-20">20</div>
					<div class="sunbed" id="sunbed-21">21</div>
					<div class="sunbed" id="sunbed-22">22</div>
					<div class="sunbed" id="sunbed-23">23</div>
					<div class="sunbed" id="sunbed-24">24</div>
					<div class="sunbed" id="sunbed-25">25</div>
					<div class="sunbed" id="sunbed-26">26</div>
					<div class="sunbed" id="sunbed-27">27</div>
					<div class="sunbed" id="sunbed-28">28</div>
					<div class="sunbed" id="sunbed-29">29</div>
					<div class="sunbed" id="sunbed-30">30</div>
					<div class="sunbed" id="sunbed-31">31</div>
					<div class="sunbed" id="sunbed-32">32</div>
					<div class="sunbed" id="sunbed-33">33</div>
					<div class="sunbed" id="sunbed-34">34</div>
					<div class="sunbed" id="sunbed-35">35</div>
					<div class="sunbed" id="sunbed-36">36</div>
					<div class="sunbed" id="sunbed-37">37</div>
					<div class="sunbed" id="sunbed-38">38</div>
					<div class="sunbed" id="sunbed-39">39</div>
					<div class="sunbed" id="sunbed-40">40</div>
					<div class="sunbed" id="sunbed-41">41</div>
					<div class="sunbed" id="sunbed-42">42</div>
					<div class="sunbed" id="sunbed-43">43</div>
					<div class="sunbed" id="sunbed-44">44</div>
					<div class="sunbed" id="sunbed-45">45</div>
					<div class="sunbed" id="sunbed-46">46</div>
					<div class="sunbed" id="sunbed-47">47</div>
					<div class="sunbed" id="sunbed-48">48</div>
					<div class="sunbed" id="sunbed-49">49</div>
					<div class="sunbed" id="sunbed-50">50</div>
					<div class="sunbed" id="sunbed-51">51</div>
					<div class="sunbed" id="sunbed-52">52</div>
					<div class="sunbed" id="sunbed-53">53</div>
					<div class="sunbed" id="sunbed-54">54</div>
					<div class="sunbed" id="sunbed-55">55</div>
					<div class="sunbed" id="sunbed-56">56</div>
					<div class="sunbed" id="sunbed-57">57</div>
					<div class="sunbed" id="sunbed-58">58</div>
					<div class="sunbed" id="sunbed-59">59</div>
					<div class="sunbed" id="sunbed-60">60</div>
					<div class="sunbed" id="sunbed-61">61</div>
					<div class="sunbed" id="sunbed-62">62</div>
					<div class="sunbed" id="sunbed-63">63</div>
					<div class="sunbed" id="sunbed-64">64</div>
					<div class="sunbed" id="sunbed-65">65</div>
					<div class="sunbed" id="sunbed-66">66</div>
					<div class="sunbed" id="sunbed-67">67</div>
					<div class="sunbed" id="sunbed-68">68</div>
					<div class="sunbed" id="sunbed-69">69</div>
					<div class="sunbed" id="sunbed-70">70</div>
					<div class="sunbed" id="sunbed-71">71</div>
					<div class="sunbed" id="sunbed-72">72</div>
					<div class="sunbed" id="sunbed-73">73</div>
					<div class="sunbed" id="sunbed-74">74</div>
					<div class="sunbed" id="sunbed-75">75</div>
					<div class="sunbed" id="sunbed-76">76</div>
					<div class="sunbed" id="sunbed-77">77</div>
					<div class="sunbed" id="sunbed-78">78</div>
					<div class="sunbed" id="sunbed-79">79</div>
					<div class="sunbed" id="sunbed-80">80</div>
					<div class="sunbed" id="sunbed-81">81</div>
					<div class="sunbed" id="sunbed-82">82</div>
					<div class="sunbed" id="sunbed-83">83</div>
					<div class="sunbed" id="sunbed-84">84</div>
					<div class="sunbed" id="sunbed-85">85</div>
					<div class="sunbed" id="sunbed-86">86</div>
					<div class="sunbed" id="sunbed-87">87</div>
					<div class="sunbed" id="sunbed-88">88</div>
					<div class="sunbed" id="sunbed-89">89</div>
					<div class="sunbed" id="sunbed-90">90</div>
					<div class="sunbed" id="sunbed-91">91</div>
					<div class="sunbed" id="sunbed-92">92</div>
					<div class="sunbed" id="sunbed-93">93</div>
					<div class="sunbed" id="sunbed-94">94</div>
					<div class="sunbed" id="sunbed-95">95</div>
					<div class="sunbed" id="sunbed-96">96</div>
					<div class="sunbed" id="sunbed-97">97</div>
					<div class="sunbed" id="sunbed-98">98</div>
					<div class="sunbed" id="sunbed-99">99</div>
					<div class="sunbed" id="sunbed-100">100</div>
					<div class="sunbed" id="sunbed-101">101</div>
					<div class="sunbed" id="sunbed-102">102</div>
					<div class="sunbed" id="sunbed-103">103</div>
					<div class="sunbed" id="sunbed-104">104</div>
					<div class="sunbed" id="sunbed-105">105</div>
					<div class="sunbed" id="sunbed-106">106</div>
					<div class="sunbed" id="sunbed-107">107</div>
					<div class="sunbed" id="sunbed-108">108</div>
					<div class="sunbed" id="sunbed-109">109</div>
					<div class="sunbed" id="sunbed-110">110</div>
					<div class="sunbed" id="sunbed-111">111</div>
					<div class="sunbed" id="sunbed-112">112</div>
					<div class="sunbed" id="sunbed-113">113</div>
					<div class="sunbed" id="sunbed-114">114</div>
					<div class="sunbed" id="sunbed-115">115</div>
					<div class="sunbed" id="sunbed-116">116</div>
					<div class="sunbed" id="sunbed-117">117</div>
					<div class="sunbed" id="sunbed-118">118</div>
					<div class="sunbed" id="sunbed-119">119</div>
					<div class="sunbed" id="sunbed-120">120</div>
					<img class="plan-photo schema" src="<?=site_url('img/schema.png');?>" alt="">
				</div>
			</div>
		</div>
		<div id="push"></div>
	</div>
	<?php $this->load->view("admin_interface/includes/footer");?>
	<?php $this->load->view("admin_interface/includes/scripts");?>
	
	<script type="text/javascript" src="<?=site_url('js/bron.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.core.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.datepicker-ru.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.widget.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.datepicker.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("input.datepicker").datepicker({
				minDate: "31.05.2013",
				maxDate: '+1D',
				onClose:function(){mt.redirect(mt.baseURL+'admin/booking?date='+$("input.datepicker").val())}
			});
		});
	</script>
</body>
</html>