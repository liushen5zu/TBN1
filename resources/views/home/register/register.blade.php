<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type"/>
        <title>
            会员注册_会商宝
        </title>
        <meta content="ie=7" http-equiv="x-ua-compatible"/>
        <link href="https://static001.huishangbao.com/favicon.ico?v=1536201048" rel="shortcut icon"/>
        <link href="https://static.huishangbao.com/favicon.ico?v=1536201048" rel="bookmark"/>
        <link href="https://static.huishangbao.com/skin/518ad//member/register/css/style_new.css?v=1536201050" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="w12 header">
                <a class="db logo fl">
                    <img alt="" height="94" src="https://static001.huishangbao.com/skin/518ad//member/register/img/logo.jpg?v=1536201050" width="327"/>
                </a>
                <div class="fr logofr">
                    <a class="blk" href="#">
                        返回首页
                    </a>
                    |
                    <a class="blk" href="#">
                        客服中心
                    </a>
                    <br/>
                    如注册遇到问题请拨打：
                    <strong style="font-size:14px;">
                        400-080-6699
                    </strong>
                </div>
            </div>
        </header>
        <div class="head_border">
        </div>
        <section class="w12 login">
            <a class="db logbtn fr" href="http://www.huishangbao.com/member/login.php">
                前往登录
            </a>
            <em class="fr">
                已经是会员，请
            </em>
        </section>
        <section class="main w12">
            <div class="w12 step" id="progress">
            </div>
            <iframe id="send" name="send" src="" style="display:none;">
            </iframe>
            <form action="register.php" autocomplete="off" id="form_register" method="post" onkeydown="if(event.keyCode==13){return false;}" target="send">
                <input id="action" name="action" type="hidden" value="1a74e6946da762f0d1c46268a506f72c"/>
                <input id="forward" name="forward" type="hidden" value="http://www.huishangbao.com/"/>
                <input id="regid" name="post[regid]" type="hidden" value="6"/>
                <div class="inputsec" id="basic_information">
                    <ul>
                        <span>
                            设置会员登录名
                        </span>
                        <li>
                            <label class="fl mr2">
                                会员名：
                                <strong>
                                    *
                                </strong>
                            </label>
                            <input autocomplete="off" class="txt-m fl " id="username" name="post[hsb_username]" onblur="Ds('dusername');validator('username');Dh('tusername');" onclick="Ds('tusername');Dh('dusername');" placeholder="会员名一旦设置成功，无法修改" type="text"/>
                            <span class="tan_right" id="tusername" style="display:none;">
                                8-20个字符，只能使用小写字母(a-z)、数字(0-9)，且以字母开头
                            </span>
                            <span id="dusername">
                            </span>
                        </li>
                        <span style="font-weight:bolder;">
                            设置登录密码
                        </span>
                        <li>
                            <label class="fl mr2">
                                登录密码：
                                <strong>
                                    *
                                </strong>
                            </label>
                            <input autocomplete="off" class="txt-m fl " id="password" maxlength="20" name="post[hsb_password]" onblur="Ds('dpassword');validator('password');Dh('tpassword');" onclick="Ds('tpassword');Dh('dpassword');" placeholder="设置您的登陆密码" style="ime-mode:disabled" type="password"/>
                            <span class="tan_right" id="tpassword" style="display:none;">
                                8-30个字符，区分大小写，推荐使用数字、字母和特殊符号组合
                            </span>
                            <span id="dpassword">
                            </span>
                        </li>
                        <li>
                            <label class="fl mr2">
                                确认密码：
                                <strong>
                                    *
                                </strong>
                            </label>
                            <input autocomplete="off" class="txt-m fl " id="cpassword" maxlength="20" name="post[hsb_cpassword]" onblur="Ds('dcpassword');validate('cpassword');Dh('tcpassword');" onclick="Dh('dcpassword');Ds('tcpassword');" placeholder="请再次输入您的密码" type="password"/>
                            <span class="tan_right" id="tcpassword" style="display:none;">
                                请再输入一遍上面填写的密码
                            </span>
                            <span id="dcpassword">
                            </span>
                        </li>
                        <li>
                            <label class="fl mr2">
                                邀请码：
                            </label>
                            <input class="txt-m fl " id="invitcode" maxlength="20" name="post[invitcode]" onblur="Ds('dinvitcode');validator_invit('invitcode');" placeholder="请填写邀请码" type="text"/>
                            <span id="dinvitcode">
                            </span>
                        </li>
                        <span style="font-weight:bolder;">
                            设置联系方式
                        </span>
                        <li>
                            <label class="fl mr2">
                                联系人：
                                <strong>
                                    *
                                </strong>
                            </label>
                            <input class="txt-m fl " id="truename" name="post[hsb_truename]" onblur="Ds('dtruename');validate('truename');Dh('ttruename');" onclick="Ds('ttruename');Dh('dtruename');" type="text"/>
                            <span class="tan_right" id="ttruename" style="display: none;">
                                请填写联系人
                            </span>
                            <span id="dtruename">
                            </span>
                        </li>
                        <li>
                            <label class="fl mr2">
                                手机：
                                <strong>
                                    *
                                </strong>
                            </label>
                            <input autocomplete="off" class="txt-m fl " id="mobile" maxlength="11" name="post[hsb_mobile]" onblur="Ds('dmobile');validate('mobile');Dh('tmobile');" onchange="syn_username();" onclick="Ds('tmobile');Dh('dmobile');" type="text"/>
                            <span class="tan_right" id="tmobile" style="display:none;">
                                请输入手机号码
                            </span>
                            <span id="dmobile">
                            </span>
                        </li>
                        <li>
                            <label class="fl mr2">
                                验证码：
                                <strong>
                                    *
                                </strong>
                            </label>
                            <input class="txt-m fl " id="captcha" name="captcha" onblur="checkcaptcha(this.value);" onfocus="showcaptcha();" onkeyup="checkcaptcha(this.value);" size="6" style="width:80px;float:left;" type="text" value="点击显示"/>
                            <span class="f_red" id="dcaptcha">
                            </span>
                            <label accesskey="V" class="verify" for="captcha" style="padding-left:10px; padding-top:10px;">
                                <img align="absmiddle" alt="" id="captchapng" onclick="reloadcaptcha();" src="https://static002.huishangbao.com/skin/518ad/image/loading.gif?v=1536201055" style="display:none;cursor:pointer;" title="验证码,看不清楚?请点击刷新
字母不区分大小写"/>
                            </label>
                            <label id="ccaptcha" style="width:20px; line-height:20px;">
                            </label>
                            <span class="tan_right fl" id="tcaptcha" style="display:none;line-height:20px;">
                                请把图形中的字符填写到输入框中
                                <br/>
                                如果看不清楚，请点击图片刷新
                            </span>
                            <span id="dcaptcha">
                            </span>
                        </li>
                        <li>
                            <label class="fl">
                            </label>
                            <p style=" line-height: 28px; ">
                                <input name="checkbox1" type="checkbox" value="1"/>
                                我已阅读并同意
                                <a "javascript:void(0)"="" class="clause" id="tc0">
                                    《会商宝服务条款协议》
                                </a>
                            </p>
                        </li>
                        <li class="clr">
                            <label class="db fl">
                            </label>
                            <a class="db fl next" id="next_1" onclick="next(2);">
                                立即注册
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="inputsec" id="check_mobile" style="display:none">
                    <ul>
                        <li>
                            <label class="fl mr2">
                                手机号码：
                            </label>
                            <em class="mr3" id="show_mobile">
                            </em>
                        </li>
                        <li>
                            <label class="fl mr2">
                                校验码：
                            </label>
                            <span class="fl yzm2">
                                <input class="fl txt-j" id="check_identify" name="check_identify" onblur="identify();" onmouseout="identify();" type="text"/>
                            </span>
                            <input class="db fl chg1 send send1" id="sendcode" type="button" value="获取验证码"/>
                            <span id="msgcode" style="display:none;">
                            </span>
                        </li>
                        <li class="clr">
                            <label class="db fl">
                            </label>
                            <a class="db fl next" onclick="next(3);">
                                提交
                            </a>
                            <input class="db fl next" id="submit" name="submit" style="display:none;" type="submit" value="立即注册"/>
                        </li>
                    </ul>
                </div>
            </form>
        </section>
        <script type="text/javascript">
            document.write('<script type="text/javascript" src="http://www.huishangbao.com/api/task.js.php?&refresh='+Math.random()+'.js"></sc'+'ript>');
        </script>
        <div class="order pr" id="toShow0">
            <div class="close">
                <a href="javascript:void(0);">
                </a>
            </div>
            <dl>
                <dt class="t14 c1 b pb15">
                    服务内容：
                </dt>
                <dd>
                    <div class="h10">
                    </div>
                    <div class="bd1 p10 article diaoyong" id="agreement">
                        <center class="px14 f_b">
                            请阅读本站服务条款
                        </center>
                        欢迎阅读会商宝服务条款协议(下称"本协议")。本协议阐述之条款和条件适用于您使用会商宝所提供的在企业间(B-TO-B)电子市场中进行贸易和交流的各种工具和服务(下称"服务")。
                        <br/>
                        1. 接受条款。
                        <br/>
                        以任何方式进入会商宝网站即表示您同意自己已经与会商宝订立本协议，且您将受本协议的条款和条件("条款") 约束。会商宝可随时自行全权决定更改"条款"。如"条款"有任何变更，会商宝将在其网站上刊载公告，通知予您。如您不同意相关变更，必须停止使用"服务"。经修订的"条款"一经在会商宝网站的公布后，立即自动生效。您应在第一次登录后仔细阅读修订后的"条款"，并有权选择停止继续使用"服务"；一旦您继续使用"服务"，则表示您已接受经修订的"条款"，当您与会商宝发生争议时，应以最新的服务协议为准。除另行明确声明外，任何使"服务"范围扩大或功能增强的新内容均受本协议约束。除非经会商宝的授权高层管理人员签订书面协议，本协议不得另行作出修订。
                        <br/>
                        <br/>
                        2.谁可使用会商宝网站？
                        <br/>
                        "服务"仅供能够根据相关法律订立具有法律约束力的合约的个人或公司使用。因此，您的年龄必须在十八周岁或以上，才可使用本公司服务。如不符合本项条件，请勿使用"服务"。会商宝可随时自行全权决定拒绝向任何人士提供"服务"。"服务"不会提供给被暂时或永久中止资格的会商宝会员。
                        <br/>
                        <br/>
                        3. 收费。
                        <br/>
                        本公司保留在根据第1条通知您后，收取"服务"费用的权利。您因进行交易、向本公司获取有偿服务或接触本公司服务器而发生的所有应纳税赋，以及相关硬件、软件、通讯、网络服务及其他方面的费用均由您自行承担。本公司保留在无须发出书面通知，仅在会商宝网站公示的情况下，暂时或永久地更改或停止部分或全部"服务"的权利。
                        <br/>
                        <br/>
                        4.会商宝网站仅作为交易地点。
                        <br/>
                        本公司网站仅作为用户物色交易对象，就货物和服务的交易进行协商，以及获取各类与贸易相关的服务的地点。但是，本公司不能控制交易所涉及的物品的质量、安全或合法性，商贸信息的真实性或准确性，以及交易方履行其在贸易协议项下的各项义务的能力。本公司不能也不会控制交易各方能否履行协议义务。此外，您应注意到，与外国国民、未成年人或以欺诈手段行事的人进行交易的风险是客观存在的。
                        <br/>
                        <br/>
                        5.您的资料和供买卖的物品。
                        <br/>
                        "您的资料"包括您在注册、交易或列举物品过程中、在任何公开信息场合或通过任何电子邮件形式，向本公司或其他用户提供的任何资料，包括数据、文本、软件、音乐、声响、照片、图画、影像、词句或其他材料。您应对"您的资料"负全部责任，而本公司仅作为您在网上发布和刊登"您的资料"的被动渠道。但是，倘若本公司认为"您的资料"可能使本公司承担任何法律或道义上的责任，或可能使本公司 (全部或部分地) 失去本公司的互联网服务供应商或其他供应商的服务，或您未在会商宝规定的期限内登录或再次登录网站，则本公司可自行全权决定对"您的资料"采取本公司认为必要或适当的任何行动，包括但不限于删除该类资料。您特此保证，您对提交给会商宝的"您的资料"拥有全部权利，包括全部版权。您确认，会商宝没有责任去认定或决定您提交给本公司的资料哪些是应当受到保护的，对享有"服务"的其他用户使用"您的资料"，本公司也不必负责。
                        <br/>
                        <br/>
                        5.1 注册义务。
                        <br/>
                        如您在会商宝网站注册，您同意：
                        <br/>
                        (a) 根根据会商宝网站刊载的会员资料表格的要求，提供关于您或贵公司的真实、准确、完整和反映当前情况的资料；
                        <br/>
                        (b) 维持并及时更新会员资料，使其保持真实、准确、完整和反映当前情况。倘若您提供任何不真实、不准确、不完整或不能反映当前情况的资料，或会商宝有合理理由怀疑该等资料不真实、不准确、不完整或不能反映当前情况，会商宝有权暂停或终止您的注册身份及资料，并拒绝您在目前或将来对"服务"(或其任何部份) 以任何形式使用。如您代表一家公司或其他法律主体在本公司登记，则您声明和保证，您有权使该公司或其他法律主体受本协议"条款"约束。
                        <br/>
                        <br/>
                        5.2 会员注册名、密码和保密。
                        <br/>
                        在登记过程中，您将选择会员注册名和密码。您须自行负责对您的会员注册名和密码保密，且须对您在会员注册名和密码下发生的所有活动承担责任。您同意：
                        <br/>
                        (a) 如发现任何人未经授权使用您的会员注册名或密码，或发生违反保密规定的任何其他情况，您会立即通知会商宝；
                        <br/>
                        (b) 确保您在每个上网时段结束时，以正确步骤离开网站。会商宝不能也不会对因您未能遵守本款规定而发生的任何损失或损毁负责。
                        <br/>
                        <br/>
                        5.3 关于您的资料的规则。
                        <br/>
                        您同意，"您的资料"和您供在会商宝网站上交易的任何"物品"（泛指一切可供依法交易的、有形的或无形的、以各种形态存在的某种具体的物品，或某种权利或利益，或某种票据或证券，或某种服务或行为。本协议中"物品"一词均含此义）
                        <br/>
                        <br/>
                        a. 不会有欺诈成份，与售卖伪造或盗窃无涉；
                        <br/>
                        b. 不会侵犯任何第三者对该物品享有的物权，或版权、专利、商标、商业秘密或其他知识产权，或隐私权、名誉权；
                        <br/>
                        c. 不会违反任何法律、法规、条例或规章 (包括但不限于关于规范出口管理、贸易配额、保护消费者、不正当竞争或虚假广告的法律、法规、条例或规章)；
                        <br/>
                        d. 不会含有诽谤（包括商业诽谤）、非法恐吓或非法骚扰的内容；
                        <br/>
                        e. 不会含有淫秽、或包含任何儿童色情内容；
                        <br/>
                        f. 不会含有蓄意毁坏、恶意干扰、秘密地截取或侵占任何系统、数据或个人资料的任何病毒、伪装破坏程序、电脑蠕虫、定时程序炸弹或其他电脑程序；
                        <br/>
                        g. 不会直接或间接与下述各项货物或服务连接，或包含对下述各项货物或服务的描述：
                        <br/>
                        (i) 本协议项下禁止的货物或服务；或
                        <br/>
                        (ii) 您无权连接或包含的货物或服务。
                        <br/>
                        此外，您同意不会：
                        <br/>
                        (h) 在与任何连锁信件、大量胡乱邮寄的电子邮件、滥发电子邮件或任何复制或多余的信息有关的方面使用"服务"；
                        <br/>
                        (i) 未经其他人士同意，利用"服务"收集其他人士的电子邮件地址及其他资料；或
                        <br/>
                        (j) 利用"服务"制作虚假的电子邮件地址，或以其他形式试图在发送人的身份或信息的来源方面误导其他人士。
                        <br/>
                        <br/>
                        5.4 被禁止物品。
                        <br/>
                        您不得在本公司网站公布或通过本公司网站买卖：
                        <br/>
                        (a) 可能使本公司违反任何相关法律、法规、条例或规章的任何物品；或
                        <br/>
                        (b) 会商宝认为应禁止或不适合通过本网站买卖的任何物品。
                        <br/>
                        <br/>
                        6. 您授予本公司的许可使用权。
                        <br/>
                        您授予本公司独家的、全球通用的、永久的、免费的许可使用权利 (并有权在多个层面对该权利进行再授权)，使本公司有权(全部或部份地) 使用、复制、修订、改写、发布、翻译、分发、执行和展示"您的资料"或制作其派生作品，和/或以现在已知或日后开发的任何形式、媒体或技术，将"您的资料"纳入其他作品内。
                        <br/>
                        <br/>
                        7.隐私。
                        <br/>
                        尽管有第6条所规定的许可使用权，会商宝将仅根据本公司的隐私声明使用"您的资料"。本公司隐私声明的全部条款属于本协议的一部份，因此，您必须仔细阅读。请注意，您一旦自愿地在会商宝交易地点披露"您的资料"，该等资料即可能被其他人士获取和使用。
                        <br/>
                        <br/>
                        8.交易程序。
                        <br/>
                        8.1 添加产品描述条目。
                        <br/>
                        产品描述是由您提供的在会商宝网站上展示的文字描述、图画和/或照片，可以是
                        <br/>
                        (a) 对您拥有而您希望出售的产品的描述；或
                        <br/>
                        (b) 对您正寻找的产品的描述。您可在会商宝网站发布任一类产品描述，或两种类型同时发布，条件是，您必须将该等产品描述归入正确的类目内。
                        <br/>
                        会商宝不对产品描述的准确性或内容负责。
                        <br/>
                        <br/>
                        8.2 就交易进行协商。
                        <br/>
                        交易各方通过在会商宝网站上明确描述报盘和回盘，进行相互协商。所有各方接纳报盘或回盘将使所涉及的会商宝用户有义务完成交易。除非在特殊情况下，诸如用户在您提出报盘后实质性地更改对物品的描述或澄清任何文字输入错误，或您未能证实交易所涉及的用户的身份等，报盘和承诺均不得撤回。
                        <br/>
                        <br/>
                        8.3 处理交易争议。
                        <br/>
                        本公司不会且不能牵涉进交易各方的交易当中。倘若您与一名或一名以上用户，或与您通过本公司网站获取其服务的第三者服务供应商发生争议，您免除会商宝 (及本公司代理人和雇员) 在因该等争议而引起的，或在任何方面与该等争议有关的不同种类和性质的任何 (实际和后果性的) 权利主张、要求和损害赔偿等方面的责任。
                        <br/>
                        <br/>
                        8.4 运用常识。
                        <br/>
                        本公司不能亦不试图对其他用户通过"服务"提供的资料进行控制。就其本质而言，其他用户的资料，可能是令人反感的、有害的或不准确的，且在某些情况下可能带有错误的标识说明或以欺诈方式加上标识说明。本公司希望您在使用本公司网站时，小心谨慎并运用常识。
                        <br/>
                        <br/>
                        9.交易系统。
                        <br/>
                        <br/>
                        9.1 不得操纵交易。
                        <br/>
                        您同意不利用帮助实现蒙蔽或欺骗意图的同伙(下属的客户或第三方)，操纵与另一交易方所进行的商业谈判的结果。
                        <br/>
                        <br/>
                        9.2 系统完整性。
                        <br/>
                        您同意，您不得使用任何装置、软件或例行程序干预或试图干预会商宝网站网站的正常运作或正在本公司网站上进行的任何交易。您不得采取对任何将不合理或不合比例的庞大负载加诸本公司网络结构的行动。您不得向任何第三者披露您的密码，或与任何第三者共用您的密码，或为任何未经批准的目的使用您的密码。
                        <br/>
                        <br/>
                        9.3 反馈。
                        <br/>
                        您不得采取任何可能损害信息反馈系统的完整性的行动，诸如：利用第二会员身份标识或第三者为您本身留下正面反馈；利用第二会员身份标识或第三者为其他用户留下负面反馈 (反馈数据轰炸)；或在用户未能履行交易范围以外的某些行动时，留下负面的反馈 (反馈恶意强加)。
                        <br/>
                        <br/>
                        9.4 不作商业性利用。
                        <br/>
                        您同意，您不得对任何资料作商业性利用，包括但不限于在未经会商宝授权高层管理人员事先书面批准的情况下，复制在会商宝网站上展示的任何资料并用于商业用途。
                        <br/>
                        <br/>
                        10. 终止或访问限制。
                        <br/>
                        您同意，在会商宝未向您收费的情况下，会商宝可自行全权决定以任何理由 (包括但不限于会商宝认为您已违反本协议的字面意义和精神，或您以不符合本协议的字面意义和精神的方式行事，或您在超过90天的时间内未以您的帐号及密码登录网站) 终止您的"服务"密码、帐户 (或其任何部份) 或您对"服务"的使用，并删除和丢弃您在使用"服务"中提交的 "您的资料"。您同意，在会商宝向您收费的情况下，会商宝应基于合理的怀疑且经电子邮件通知的情况下实施上述终止服务的行为。会商宝同时可自行全权决定，在发出通知或不发出通知的情况下，随时停止提供"服务"或其任何部份。您同意，根据本协议的任何规定终止您使用"服务"之措施可在不发出事先通知的情况下实施，并承认和同意，会商宝可立即使您的帐户无效，或撤销您的帐户以及在您的帐户内的所有相关资料和档案，和/或禁止您进一步接入该等档案或"服务"。帐号终止后，会商宝没有义务为您保留原帐号中或与之相关的任何信息，或转发任何未曾阅读或发送的信息给您或第三方。此外，您同意，会商宝不会就终止您接入"服务"而对您或任何第三者承担任何责任。第12、13、14和22各条应在本协议终止后继续有效。
                        <br/>
                        <br/>
                        11. 违反规则会有什么后果？
                        <br/>
                        在不限制其他补救措施的前提下，发生下述任一情况，本公司可立即发出警告，暂时中止、永久中止或终止您的会员资格，删除您的任何现有产品信息，以及您在网站上展示的任何其他资料：
                        <br/>
                        (i) 您违反本协议；
                        <br/>
                        (ii) 本公司无法核实或鉴定您向本公司提供的任何资料；或
                        <br/>
                        (iii) 本公司相信您的行为可能会使您、本公司用户或通过本公司或本公司网站提供服务的第三者服务供应商发生任何法律责任。在不限制任何其他补救措施的前提下，倘若发现您从事涉及本公司网站的诈骗活动，会商宝可暂停或终止您的帐户。
                        <br/>
                        <br/>
                        12. 服务"按现状"提供。
                        <br/>
                        本公司会尽一切努力使您在使用会商宝网站的过程中得到乐趣。遗憾的是，本公司不能随时预见到任何技术上的问题或其他困难。该等困难可能会导致数据损失或其他服务中断。为此，您明确理解和同意，您使用"服务"的风险由您自行承担。"服务"以"按现状"和"按可得到"的基础提供。会商宝明确声明不作出任何种类的所有明示或暗示的保证，包括但不限于关于适销性、适用于某一特定用途和无侵权行为等方面的保证。会商宝对下述内容不作保证：
                        <br/>
                        (i)"服务"会符合您的要求；
                        <br/>
                        (ii)"服务"不会中断，且适时、安全和不带任何错误；
                        <br/>
                        (iii) 通过使用"服务"而可能获取的结果将是准确或可信赖的；
                        <br/>
                        (iv) 您通过"服务"而购买或获取的任何产品、服务、资料或其他材料的质量将符合您的预期。通过使用"服务"而下载或以其他形式获取任何材料是由您自行全权决定进行的，且与此有关的风险由您自行承担，对于因您下载任何该等材料而发生的您的电脑系统的任何损毁或任何数据损失，您将自行承担责任。您从会商宝或通过或从"服务"获取的任何口头或书面意见或资料，均不产生未在本协议内明确载明的任何保证。
                        <br/>
                        <br/>
                        13. 责任范围。
                        <br/>
                        您明确理解和同意，会商宝不对因下述任一情况而发生的任何损害赔偿承担责任，包括但不限于利润、商誉、使用、数据等方面的损失或其他无形损失的损害赔偿 (无论会商宝是否已被告知该等损害赔偿的可能性)：
                        <br/>
                        (i) 使用或未能使用"服务"；
                        <br/>
                        (ii) 因通过或从"服务"购买或获取任何货物、样品、数据、资料或服务，或通过或从"服务"接收任何信息或缔结任何交易所产生的获取替代货物和服务的费用；
                        <br/>
                        (iii) 未经批准接入或更改您的传输资料或数据；
                        <br/>
                        (iv) 任何第三者对"服务"的声明或关于"服务"的行为；或因任何原因而引起的与"服务"有关的任何其他事宜，包括疏忽。
                        <br/>
                        <br/>
                        14. 赔偿。
                        <br/>
                        您同意，因您违反本协议或经在此提及而纳入本协议的其他文件，或因您违反了法律或侵害了第三方的权利，而使第三方对会商宝及其子公司、分公司、董事、职员、代理人提出索赔要求（包括司法费用和其他专业人士的费用），您必须赔偿给会商宝及其子公司、分公司、董事、职员、代理人，使其等免遭损失。
                        <br/>
                        <br/>
                        15. 遵守法律。
                        <br/>
                        您应遵守与您使用"服务"，以及与您竞买、购买和销售任何物品以及提供商贸信息有关的所有相关的法律、法规、条例和规章。
                        <br/>
                        <br/>
                        16. 无代理关系。
                        <br/>
                        您与会商宝仅为独立订约人关系。本协议无意结成或创设任何代理、合伙、合营、雇用与被雇用或特许权授予与被授予关系。
                        <br/>
                        <br/>
                        17. 广告和金融服务。
                        <br/>
                        您与在"服务"上或通过"服务"物色的刊登广告人士通讯或进行业务往来或参与其推广活动，包括就相关货物或服务付款和交付相关货物或服务，以及与该等业务往来相关的任何其他条款、条件、保证或声明，仅限于在您和该刊登广告人士之间发生。您同意，对于因任何该等业务往来或因在"服务"上出现该等刊登广告人士而发生的任何种类的任何损失或损毁，会商宝无需负责或承担任何责任。您如打算通过"服务"创设或参与与任何公司、股票行情、投资或证券有关的任何服务，或通过"服务"收取或要求与任何公司、股票行情、投资或证券有关的任何新闻信息、警戒性信息或其他资料，敬请注意，会商宝不会就通过"服务"传送的任何该等资料的准确性、有用性或可用性、可获利性负责或承担任何责任，且不会对根据该等资料而作出的任何交易或投资决策负责或承担任何责任。
                        <br/>
                        <br/>
                        18. 链接。
                        <br/>
                        "服务"或第三者均可提供与其他万维网网站或资源的链接。由于会商宝并不控制该等网站和资源，您承认并同意，会商宝并不对该等外在网站或资源的可用性负责，且不认可该等网站或资源上或可从该等网站或资源获取的任何内容、宣传、产品、服务或其他材料，也不对其等负责或承担任何责任。您进一步承认和同意，对于任何因使用或信赖从此类网站或资源上获取的此类内容、宣传、产品、服务或其他材料而造成（或声称造成）的任何直接或间接损失，会商宝均不承担责任。
                        <br/>
                        <br/>
                        19. 通知。
                        <br/>
                        除非另有明确规定，任何通知应以电子邮件形式发送，(就会商宝而言) 电子邮件地址为以本站域名后缀之地址，或 (就您而言) 发送到您在登记过程中向会商宝提供的电子邮件地址，或有关方指明的该等其他地址。在电子邮件发出二十四 (24) 小时后，通知应被视为已送达，除非发送人被告知相关电子邮件地址已作废。或者，本公司可通过邮资预付挂号邮件并要求回执的方式，将通知发到您在登记过程中向会商宝提供的地址。在该情况下，在付邮当日三 (3) 天后通知被视为已送达。
                        <br/>
                        <br/>
                        20. 不可抗力。
                        <br/>
                        对于因本公司合理控制范围以外的原因，包括但不限于自然灾害、罢工或骚乱、物质短缺或定量配给、暴动、战争行为、政府行为、通讯或其他设施故障或严重伤亡事故等，致使本公司延迟或未能履约的，会商宝不对您承担任何责任。
                        <br/>
                        <br/>
                        21. 转让。
                        <br/>
                        会商宝转让本协议无需经您同意。
                        <br/>
                        <br/>
                        22. 其他规定。
                        <br/>
                        本协议取代您和会商宝先前就相同事项订立的任何书面或口头协议。本协议各方面应受中华人民共和国大陆地区法律的管辖。倘若本协议任何规定被裁定为无效或不可强制执行，该项规定应被撤销，而其余规定应予执行。条款标题仅为方便参阅而设，并不以任何方式界定、限制、解释或描述该条款的范围或限度。本公司未就您或其他人士的某项违约行为采取行动，并不表明本公司撤回就任何继后或类似的违约事件采取行动的权利。
                        <br/>
                        <br/>
                        23. 诉讼。
                        <br/>
                        因本协议或本公司服务所引起或与其有关的任何争议应向人民法院提起诉讼，并以中华人民共和国法律为管辖法律。
                    </div>
                    <div class="h10">
                    </div>
                </dd>
            </dl>
        </div>
<script type="text/javascript">
    $('#sendcode').sms({
        //laravel csrf token
        token       : "{{csrf_token()}}",
        //请求间隔时间
        interval    : 60,
        //请求参数
        requestData : {
            //手机号
            mobile : function () {
                return '17609527039';
            },
            //手机号的检测规则
            // mobile_rule : 'mobile_required'
        }
    });
        </script>
    </body>
</html>