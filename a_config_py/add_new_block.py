import os 
def create_new_block(numero):
    numero_do_bloco = numero
    nova_pasta_bloco = "bloco{}".format(numero_do_bloco)
    pasta_blocos = ("blocos/"+nova_pasta_bloco)
    nova_pasta_css = "css_bloco_{}".format(numero_do_bloco) 
    pasta_css = ("css/"+nova_pasta_css) 

    if (not os.path.exists(pasta_blocos)):
        os.mkdir(pasta_blocos)
    if (not os.path.exists(pasta_css)):
        os.mkdir(pasta_css)

    new_archive_php = "bloco{}.php".format(numero_do_bloco)
    path_archive_php = (f"{pasta_blocos}/{new_archive_php}")

    new_archive_css = "style.css"
    path_archive_css = (f"{pasta_css}/{new_archive_css}")

    if (not os.path.exists(path_archive_php)):
        php = open(path_archive_php,"w")
        php.close()
    if (not os.path.exists(path_archive_css)):
        css = open(path_archive_css,"w")
        css.close()
create_new_block(8)
