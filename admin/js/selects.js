// JavaScript Document


function category(){
var model = new Array("ქველმოქმედება", "ჯანდაცვა და მედიცინა", "განათლება და ტრეინინგი", "კვების ობიექტები", "სილამაზე და ჯანმრთელობა", "საბავშვო სივრცე", "გართობა", "დასვენება", "მომსახურეობის სფერო", "უძრავი ქონება", "ავტო", " ");

        var marka = new Array(
                            new Array("ეკლესია–მონასტრების მშენებლობა/აღდგენა", "მიუსაფარ ბავშვთა სახლები", "სოციალურად დაუცველები", "მოხუცთა სახლები", "სნეულთა დახმარება"),
                            new Array("სამშობიაროები", "ონკოლოგია", "პლასტიკური მედიცინა", "სტომატოლოგია", "რეპროდუქტოლოგია", "სამედიცინო აპარატურა", "გინეკოლოგია/მამოლოგია/უროლოგია", "ნევროლოგია", "ფსიქოლოგია", "დიაგნოსტიკა", "ლაბორატორიული კვლევები", "ფარმაცევტული კომპანიები,აფთიაქები", "კარდიოლოგია", "პედიატრია", "სისხლის ბანკი", "ოფთალმოლოგიური კლინიკები"),
							new Array("უნივერსიტეტი", "სკოლა", "საბავშვო ბაღი", "კოლეჯი", "ტრენინგ ცენტრი", "უცხო ენათა ცენტრი"),
							new Array("რესტორანი", "კაფე", "ბარი", "სწრაფი კვება", "სუში", "პაბი, ლუდხანა", "პიცერია", "სახინკლე,სამწვადე"),
							new Array("სილამაზის სალონი", "სოლარიუმი", "ფიტნესი", "ესთეტიკის ცენტრი", "იოგა", "საუნა", "საცურაო აუზი", "აერობიკა", "სპორტულ/გამაჯანსაღებელი"),
							new Array("გასართობი ცენტრი", "საბავშვო მაღაზია"),
							new Array("ღამის კლუბი", "კარაოკე", "საბილიარდო და ბოულინგის ცენტრი", "კინო", "თეატრი", "გალერეა", "ოპერა"),
							new Array("სასტუმრო", "ტურისტული სააგენტო", "ავიაკომპანია", "ტურები"),
							new Array("იურიდიული მომსახურება", "ნოტარიული მომსახურება", "სადაზღვევო მომსახურება", "საბანკო მომსახურება", "მიკროსაფინანსო კომპანია", "ბუღალტერია", "კომპიუტერული მომსახურება", "სარეკლამო კომპანია", "ტვირთების გადაზიდვის სერვისი", "ტაქსი", "დაცვის სამსახური", "ციფრული ბეჭდვა", "კავშირგაბმულობა", "ფოტო სტუდია", "ქიმწმენდა, რეცხვა", "დიზაინი, საქორწილო გაფორმება", "ტანსაცმლის გაქირავების სერვისი", "დღესასწაულების ორგანიზება", "ვებ–გვერდის დამზადება/დიზაინი", "სხვა (თხილამურების, სალაშქრო მოწყობილობების გაქირავება)"),
							new Array("უძრავი ქონების სააგენტო", "სამშენებლო კომპანია", "მიმდინარე მშენებლობები", "ინტერიერის/ექსტერიერის დიზაინი", "გათბობა, ვენტილაცია და კონდიცირება", "სამშენებლო–სარემონტო მასალების მაღაზია", "კარ–ფანჯრების  დამზადება"),
							new Array("ავტოგაქირავება", "ავტოსკოლა", "ბენზინგასამართი სადგური", "გაზგასამართი სადგური", "ავტომობილის გაზის სისტემები", "ავტოსამრეცხაო", "ავტომობილის აქსესუარები", "სერვის ცენტრები", "ავტოსერვისი შენს გზაზე"),
							new Array("ავეჯი", "ტექნიკა", "ტანსაცმელი/ფეხსაცმელი", "სპორტული მაღაზია", "პარფიუმერია", "ოპტიკური სალონი", "სუპერმარკეტი შენს უბანში")
							);
        
        (function () {
            
            var txt = "";

            for (var i = 0; i < model.length; i++) {
                txt += "<option value='" + i + "'>" + model[i] + "</option>";
            }


            document.getElementById("main").innerHTML = "<option value='-1'></option>"+txt;
        })();

        function mn(t) {
            var txt = "";
            for (var i = 0; i < marka[t.value].length; i++) {
                txt += "<option value='" + i + "'>" + marka[t.value][i] + "</option>";
            }
            document.getElementById("sub").innerHTML = txt;
        }
}