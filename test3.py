# coding=utf-8


import urllib
import BeautifulSoup 	

def spider():
   page = urllib.request.urlopen("https://www.58klc.com")
   html = page.read()

   soup = BeautifulSoup(html, 'lxml')  #声明BeautifulSoup对象

   divbox = soup.find_all("div","klc-invest-item");
   for item in blog_items:
          
            title = item.find('div', 'project-title').get('title')
            day = item.find('div', 'project-day').span.get_text().strip()
            process = item.find_all('span')[-1].get_text().strip()
            profit = item.find_all('p')[-1].get_text().strip().replace(' ', '')
            print('==============================================')
            print('项目名称：'+title)
            print('项目期限：'+day)
            print('项目进度：'+process)
            print('项目收益：'+profit)


